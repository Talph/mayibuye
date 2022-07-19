<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientFormRequest;
use App\Http\Services\AttachModelService;
use App\Http\Services\ClientService;
use App\Http\Services\IndustryAttachService;
use App\Http\Services\Media\MediaFileService;
use App\Http\Services\SolutionAttachService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Solution;
use App\Models\Industry;
use Illuminate\Http\Response;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $clients = Client::with('relatedUser')->orderBy('id', 'desc')->paginate(10);
        return view('backend.dashboard.modules.clients.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $solutions = Solution::all();
        $industries = Industry::all();
        return view('backend.dashboard.modules.clients.create', ['solutions' => $solutions, 'industries' => $industries]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ClientFormRequest $request
     * @param ClientService $clientService
     * @param MediaFileService $mediaFileService
     * @param AttachModelService $attachModelService
     * @return RedirectResponse
     */
    public function store(ClientFormRequest $request,ClientService $clientService, MediaFileService $mediaFileService,
                          AttachModelService $attachModelService): RedirectResponse
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

        $attachModelService->attachModel($client, $request->get('industry_id'), 'industries');
        $attachModelService->attachModel($client, $request->get('solution_id'), 'solutions');

        // $request->session()->flash('message', 'Successfully created client');
        return redirect()->back()->with('message', 'Successfully created client');
    }

    /**
     * Display the specified resource.
     *
     * @param Client $client
     * @return Application|Factory|View
     */
    public function show(Client $client): View|Factory|Application
    {
         return view('backend.dashboard.modules.clients.show', [ 'client' => $client->with('relatedUser')->first() ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Client $client
     * @return Application|Factory|View
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
     * @param ClientFormRequest $request
     * @param ClientService $clientService
     * @param MediaFileService $mediaFileService
     * @param IndustryAttachService $industryAttachService
     * @param SolutionAttachService $solutionAttachService
     * @return RedirectResponse
     */
    public function update(ClientFormRequest $request,ClientService $clientService, MediaFileService $mediaFileService,
                           IndustryAttachService $industryAttachService, SolutionAttachService $solutionAttachService): RedirectResponse
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
