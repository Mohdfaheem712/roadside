<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function services(){
        return view('frontend.services');
    }

    public function about(){
        return view('frontend.about');
    }

    public function gallery(){
        return view('frontend.gallery');
    }

    public function booknow(){
        return view('frontend.booknow');
    }

    public function contact(){
        return view('frontend.contact');
    }
}
