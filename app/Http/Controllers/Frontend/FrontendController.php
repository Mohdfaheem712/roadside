<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
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
        $images = Gallery::all()
            ->chunk(3, function($images) {
            return false;
        });

        return view('frontend.gallery',compact('images'));
    }

    public function booknow(){
        return view('frontend.booknow');
    }

    public function contact(){
        return view('frontend.contact');
    }
}
