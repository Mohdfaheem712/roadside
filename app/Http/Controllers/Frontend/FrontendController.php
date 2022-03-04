<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\WebsiteSetting;
use App\Models\Gallery;
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
        $setting = $this->setting;
        return view('frontend.services',compact('setting'));
    }

    public function about(){
        $setting = $this->setting;
        return view('frontend.about',compact('setting'));
    }

    public function gallery(){
        $setting = $this->setting;
        $images = Gallery::all()
            ->chunk(3, function($images) {
            return false;
        });

        return view('frontend.gallery',compact('setting','images'));
    }

    public function booknow(){
        $setting = $this->setting;
        return view('frontend.booknow',compact('setting'));
    }

    public function contact(){
        $setting = $this->setting;
        return view('frontend.contact',compact('setting'));
    }
}
