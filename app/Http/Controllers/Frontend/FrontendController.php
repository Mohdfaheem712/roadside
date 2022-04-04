<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\UserQueries;

class FrontendController extends Controller
{

    public function index(){
        return view('frontend.index');
    }

    public function services(){
        return view('frontend.services');
    }

    public function blogs(){
        $blogs = Blog::all();
        return view('frontend.blogs',compact('blogs'));
    }

    public function blog($slug)
    {
        $blog = Blog::where('slug', '=', $slug)->first();
        return view('frontend.blog', compact('blog'));
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

    public function postContact(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        $data = request()->except(['_token']);
        if(UserQueries::create($data)){
            return redirect("contact")->with('message','Thanks for your time, we will get back to you soon');
        }
        return redirect("contact")->with('message','Login details are not valid');
    }
}
