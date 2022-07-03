<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientFormRequest;
use App\Http\Services\ClientService;
use App\Http\Services\IndustryAttachService;
use App\Http\Services\Media\MediaFileService;
use App\Http\Services\SolutionAttachService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Solution;
use App\Models\Industry;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::with('relatedUser')->orderBy('id', 'desc')->paginate(10);
        return view('backend.dashboard.modules.clients.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $solutions = Solution::all();
        $industries = Industry::all();
        return view('backend.dashboard.modules.clients.create', ['solutions' => $solutions, 'industries' => $industries]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientFormRequest $request,ClientService $clientService, MediaFileService $mediaFileService,
                          IndustryAttachService $industryAttachService, SolutionAttachService $solutionAttachService)
    {
        $client = $clientService->storeClient(
            $request
        );

        // Upload company logo
        $mediaFileService->fileUpload(
            $client,
            $request->file('client_logo'),
            'logos'
        );

        //Upload example one
        $mediaFileService->fileUpload(
            $client,
            $request->file('example_one'),
            'project-images'
        );

        //Upload example two
        $mediaFileService->fileUpload(
            $client, $request->file('example_two'),
            'project-images'
        );

        //Upload example three
        $mediaFileService->fileUpload(
            $client, $request->file('example_three'),
            'project-images'
        );

        $industryAttachService->attachCategory($client, (array)$request->get('industry_id'));
        $solutionAttachService->attachSolution($client, $request->get('solution_id'));

        // $request->session()->flash('message', 'Successfully created client');
        return redirect()->back()->with('message', 'Successfully created client');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
         return view('backend.dashboard.modules.clients.show', [ 'client' => $client->with('relatedUser')->first() ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        $solutions = Solution::get(['id','solution_name']);
        $industries = Industry::get(['id','industry_name']);
        return view('backend.dashboard.modules.clients.edit', [ 'solutions' => $solutions, 'client' => $client, 'industries'=> $industries ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientFormRequest $request,ClientService $clientService, MediaFileService $mediaFileService,
                           IndustryAttachService $industryAttachService, SolutionAttachService $solutionAttachService)
    {

        $client = $clientService->storeClient(
            $request
        );

        // Upload company logo
        $mediaFileService->fileUpload(
            $client,
            $request->file('client_logo'),
            'logos'
        );

        $industryAttachService->attachCategory($client, (array)$request->get('industry_id'));
        $solutionAttachService->attachSolution($client, $request->get('solution_id'));

        return redirect()->back()->with('message', 'Successfully updated client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Client $client
     * @return RedirectResponse
     */
    public function destroy(Client $client): RedirectResponse
    {
        $client->delete();
        $client->relatedSolutions()->detach($client->id);
        $client->relatedIndustries()->detach($client->id);
        return redirect()->route('clients.index')->with('message', 'Successfully deleted');
    }
    
}
