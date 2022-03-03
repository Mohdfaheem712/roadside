<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\WebsiteSetting;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function __construct(WebsiteSetting $WebsiteSetting){
        $this->setting = $WebsiteSetting->find(1);
    }

    public function index(){
        $setting = $this->setting;
        return view('frontend.index',compact('setting'));
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
