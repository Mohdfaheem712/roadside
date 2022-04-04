<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function blog(){
        $blogs = Blog::all();
        return view('backend.blog.index',compact('blogs'));
    }

    public function addBlog(){
        return view('backend.blog.add');
    }

    public function postBlog(Request $request){
        $request->validate([
            'title' => 'required',
            'status' => 'required',
            'description' => 'required',
        ]);
        $data = request()->except(['_token']);
        $data['slug'] = Str::slug($data['title']);
        if($request->hasFile($request->file)){
            if (isset($data['image'])) {
                $data['image_url'] = request()->file('image')->store('images/blog');
            }
        }
        if(Blog::create($data)){
            return redirect()->route('admin.blog')->with(['success' => 'Blog added successfully!']);
        }
        return redirect()->route('admin.blog')->with(['error' => 'Oops! something went wrong!']);
    }

    public function editBlog($id){
        $blog = Blog::find($id);
        return view('backend.blog.edit',compact('blog'));
    }

    public function updateBlog(Request $request,$id){
        $blog = Blog::find($id);
        $request->validate([
            'title' => 'required',
            'status' => 'required',
        ]);
        $data = request()->except(['_token']);
        if($request->hasFile($request->file)){
            if (isset($data['image'])) {
                if(!empty($blog->image_url)){
                    Storage::delete($blog->image_url);
                }
                $data['image_url'] = request()->file('image')->store('images/gallery');
            }
        }
        if($blog->update($data)){
            return redirect()->route('admin.editBlog',$id)->with(['success' => 'Blog updated successfully!']);
        }
        return redirect()->route('admin.editBlog',$id)->with(['error' => 'Oops! something went wrong!']);
    }

    public function deleteBlog($id){
        $blog = Blog::find($id);
        if(!empty($blog->image_url)){
            Storage::delete($blog->image_url);
        }
        if($blog->delete()){
            return redirect()->route('admin.blog')->with(['success' => 'Image added successfully!']);
        }
        return redirect()->route('admin.blog')->with(['error' => 'Oops! something went wrong!']);
    }

}
