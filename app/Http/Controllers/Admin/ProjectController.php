<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectFormRequest;
use App\Http\Services\AttachModelService;
use App\Http\Services\ProjectService;
use App\Models\Client;
use App\Models\Project;
use App\Models\ProjectCategory;
use Carbon\Carbon;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): Application|Factory|View
    {
        if(!auth()->user()->hasRelatedRole('admin') && !auth()->user()->hasRelatedRole('manager') && !auth()->user()->hasRelatedRole('editor') )
        {
            $projects = Project::with('relatedUsers')->orderBy('id', 'desc')
                ->paginate(10);
        }
        else
        {
            $projects = Project::orderBy('id', 'desc')->paginate(10);
        }
        return view('backend.dashboard.modules.projects.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $this->authorize('create', Project::class);
        $categories = ProjectCategory::query()->get();
        $clients = Client::query()->get();
        $project = [];
        return view('backend.dashboard.modules.projects.create', [ 'project'=>$project, 'categories' => $categories, 'clients'=>$clients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProjectFormRequest $request
     * @param AttachModelService $attachModelService
     * @param ProjectService $projectService
     * @return RedirectResponse
     * @throws AuthorizationException
     */
    public function store(ProjectFormRequest $request, AttachModelService $attachModelService, ProjectService $projectService): RedirectResponse
    {
        $this->authorize('store', Project::class);

        $project = $projectService->storeProject($request);
        $category = $attachModelService->attachModel($project, $request->get('category_id'), 'categories');
        if(!$category && !$project){
            return redirect()->route('projects.create')->with('err_message', 'Project could not be save something went wrong.');
        }

        return redirect()->route('projects.index')->with('message', 'Project successfully created.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Project $project
     * @return View
     * @throws AuthorizationException
     */
    public function edit(Project $project): View
    {
        $this->authorize('edit', Project::class);
        $project = $project->with(['relatedCategories', 'relatedClients'])->first();
        $categories = ProjectCategory::query()->get(['id', 'category_name']);
        $clients = Client::query()->get(['id', 'client_name']);
        return view('backend.dashboard.modules.projects.edit', [ 'project' => $project, 'categories' => $categories, 'clients' => $clients]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProjectFormRequest $request
     * @param AttachModelService $attachModelService
     * @param ProjectService $projectService
     * @return RedirectResponse
     * @throws AuthorizationException
     */
    public function update(ProjectFormRequest $request, AttachModelService $attachModelService, ProjectService $projectService): RedirectResponse
    {
        $this->authorize('update', Project::class);

        $project = $projectService->storeProject($request);
        $category = $attachModelService->attachModel($project, $request->get('category_id'), 'categories');
        if(!$category && !$project){
            return redirect()->route('projects.create')->with('err_message', 'Project could not be save something went wrong.');
        }

        return redirect()->route('projects.index')->with('message', 'Project successfully created.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @return RedirectResponse
     */
    public function destroy(Project $project): RedirectResponse
    {
        $project->delete();
        $project->relatedCategories()->detach($project->id);

        return back()->with('err_message', 'Project deleted successfully.');
    }
}
