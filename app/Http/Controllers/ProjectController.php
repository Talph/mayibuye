<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('website.projects')->with('projects', $projects);
    }

    public function building(): Factory|View|Application
    {
        $projects = Project::all();
        return view('website.projects.building')->with('projects', $projects);
    }

    public function structures(): Factory|View|Application
    {
        $projects = Project::all();
        return view('website.projects.structures')->with('projects', $projects);
    }

    public function roads(): Factory|View|Application
    {
        $projects = Project::all();
        return view('website.projects.road-and-earthworks')->with('projects', $projects);
    }

    public function ongoing(): Factory|View|Application
    {
        $projects = Project::all();
        return view('website.projects.ongoing-projects')->with('projects', $projects);
    }
}
