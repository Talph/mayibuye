<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index(){

        $images = \File::allFiles(public_path('gallery'));

        return View('website.gallery')->with(array('images'=>$images));

    }
}