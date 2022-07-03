<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\CookiePolicy;
class CookiePolicyController extends Controller
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
        if(!\Auth::user()->hasRole('admin') && !\Auth::user()->hasRole('manager') && !\Auth::user()->hasRole('editor') )
        {
            $policies = CookiePolicy::where('user_id', \Auth::user()->id)->orderBy('id', 'desc')
            ->paginate(10);
        }
        else
        {
            $policies = CookiePolicy::orderBy('id', 'desc')->paginate(10);
        }
        return view('backend.dashboard.legal.cookie-policy.index', ['policies' => $policies]);
    }

    public function trash()
    {
        $policies = CookiePolicy::onlyTrashed()->paginate( 20 );
        return view('backend.dashboard.legal.cookie-policy.trash', ['policies' => $policies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', CookiePolicy::class);   
        $categories = BlogCategory::all();
        return view('backend.dashboard.legal.cookie-policy.create', [ 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('store', CookiePolicy::class);
        $validatedData = $request->validate([
            'title'             => 'required|min:1|max:64',
            'subtitle'          => 'required',
            'post_body'           => 'required',
            'short_description' => 'required',
        ]);
        
        if($request->file('img_name'))
        {
        $fileNameWithTheExtension =  $request->file('img_name')->getClientOriginalName(); //get the image from the form
        $fileName = pathinfo($fileNameWithTheExtension, PATHINFO_FILENAME); //get the name of the file
        $extension =  $request->file('img_name')->getClientOriginalExtension(); //get extension of the file
        $newFileName = $fileName . '_' . time() . '.' . $extension; //create a new name for the file using the timestamp
        $path =  $request->file('img_name')->storeAs('public/images/policies_images', $newFileName); //save the iamge onto a public directory into a separately folder
        }
        else
        {
            $newFileName = '';
        }
        $user = auth()->user();
        $post = new CookiePolicy();
        $post->title = $request->input('title');
        $post->subtitle = $request->input('subtitle');
        $post->meta_desc = $request->input('meta_desc');
        $post->seo_keywords = $request->input('seo_keywords');
        $post->short_description = $request->input('short_description');
        $post->image_thumbnail = $newFileName;
        $post->post_body = $request->input('post_body');
        $post->seo_title = $request->input('seo_title');
        $post->is_published = $request->input('is_published');
        if(!$request->input('posted_at'))
        {
            $post->posted_at = Carbon::now()->toDateTimeString();
        }
        else
        {
            $post->posted_at = $request->input('posted_at');  
        }
        $post->user_id = $user->id;
        $post->save();
        $category = $request->input('category_id');
        if($category)
        {
            foreach ($category as $cat)
            {
                $post->categories()->attach($cat);
            }
        }
        $request->session()->flash('message', 'Successfully created post');
        return redirect()->route('policies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = CookiePolicy::with('user')->find($id);
        return view('backend.dashboard.legal.cookie-policy.show', [ 'post' => $post ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, CookiePolicy $CookiePolicy)
    {
        $this->authorize('edit', $CookiePolicy);
        $post = CookiePolicy::find($id);
        $categories = BlogCategory::get();
        return view('backend.dashboard.legal.cookie-policy.edit', [ 'categories' => $categories, 'post' => $post ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, CookiePolicy $CookiePolicy)
    {
        $this->authorize('update', $CookiePolicy);
        $validatedData = $request->validate([
            'title'             => 'required|min:1|max:64',
            'subtitle'          => 'required',
            'post_body'           => 'required',
            'short_description' => 'required',
        ]);
         if($request->file('img_name')){
           $fileNameWithTheExtension = $request->file('img_name')->getClientOriginalName(); //get the image from the form
            $fileName = pathinfo($fileNameWithTheExtension, PATHINFO_FILENAME); //get the name of the file
            $extension =  $request->file('img_name')->getClientOriginalExtension(); //get extension of the file
            $newFileName = $fileName . '_' . time() . '.' . $extension; //create a new name for the file using the timestamp
            $path =  $request->file('img_name')->storeAs('public/images/policies_images', $newFileName); //save the iamge onto a public directory into a separately folder
        }
        else
        {
            $newFileName = '';
        }
        $post = CookiePolicy::find($id);
        $post->title     = $request->input('title');
        $post->subtitle     = $request->input('subtitle');
        $post->meta_desc     = $request->input('meta_desc');
        $post->short_description     = $request->input('short_description');
        $post->post_body   = $request->input('post_body');
        $post->seo_title = $request->input('seo_title');
        $post->image_thumbnail = $newFileName;
        if(!$request->input('posted_at'))
        {
            $post->posted_at = Carbon::now()->toDateTimeString();
        }
        else
        {
            $post->posted_at = $request->input('posted_at');  
        }
        $post->is_published = $request->input('is_published');
        $post->save();
        $post->categories()->detach();
        $category = $request->input('category_id');
        if($category)
        {
        foreach ($category as $cat) 
        {
            $post->categories()->attach($cat);
        }
    }
        $request->session()->flash('message', 'Successfully edited note');
        return redirect()->route('policies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = CookiePolicy::find($id);
        $this->authorize('delete', $post);
        if($post)
        {
        $oldImage = public_path() . '/storage/images/policies_images/'. $post->image_thumbnail;
        if(file_exists($oldImage))
        {
            unlink($oldImage); //delete the image
        }
            $post->status = 'Deleted';
            $post->delete();
        }
        $post->categories()->detach();
        return redirect()->route('policies.index');
    }
}
