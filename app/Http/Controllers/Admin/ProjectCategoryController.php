<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use App\Http\Services\CategoryService;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectCategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $categories = ProjectCategory::withCount('relatedProjects')->paginate( 20 );
        return view('backend.dashboard.modules.projects.categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProjectCategory::get();
        return view('backend.dashboard.modules.projects.categories.create', [ 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\CategoryFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryFormRequest $request, CategoryService $categoryService)
    {
        $categoryService->storeProject($request);
        return redirect()->route('categories.index')->with('message', 'Successfully created category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectCategory $projectCategory)
    {
        $post = $projectCategory->with('user')->first();
        return view('backend.dashboard.modules.categories.show', [ 'post' => $post ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = ProjectCategory::find($id);
        return view('backend.dashboard.modules.projects.categories.edit', [ 'category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = ProjectCategory::find($id);
        $slug = Str::slug($request->input('slug'), '-');
        $category->category_name = $request->input('category_name');
        $category->category_description = $request->input('category_description');
        $category->slug = $slug;
        $category->save();
        $request->session()->flash('message', 'Successfully edited category');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = ProjectCategory::find($id);
        if($category)
        {
            $category->delete();
        }
        return redirect()->route('categories.index');
    }
}
