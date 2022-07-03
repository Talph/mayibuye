<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Models\BlogPost;

class BlogCategoryController extends Controller
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
        $categories = BlogCategory::paginate( 20 );
        return view('backend.dashboard.modules.categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BlogCategory::get();
        return view('backend.dashboard.modules.categories.create', [ 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'category_name' => 'required|min:1|max:64',
        ]);
        $user = auth()->user();
        $category = new BlogCategory();
        $category->category_name     = $request->input('category_name');
        $category->category_description     = $request->input('category_description');
        $category->created_by = $user->id;
        $category->save();
        $request->session()->flash('message', 'Successfully created category');
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = BlogCategory::with('user')->find($id);
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
        $category = BlogCategory::find($id);
        return view('backend.dashboard.modules.categories.edit', [ 'category' => $category]);
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
        $validatedData = $request->validate([
            'category_name'             => 'required|min:1|max:64',
            'category_description'          => 'required',
        ]);
        $category = BlogCategory::find($id);
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
        $category = BlogCategory::find($id);
        if($category)
        {
            $category->delete();
        }
        return redirect()->route('categories.index');
    }
}
