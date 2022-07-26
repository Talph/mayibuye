<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function about(){
        return view('website.about');
    }

    public function services(){

        return view('website.services');
    }

    public function contact_page(){

        return view('website.contact');
    }

    public function director(){

        return view('website.director');
    }

    public function team(){

        return view('website.team');
    }

    public function certifications_memberships(){

        return view('website.certificationMembership');
    }

    public function gallery(){

        $images = \File::allFiles('gallery');
        // $images = [];

        return View('website.gallery')->with(array('images'=>$images));
    }
}
