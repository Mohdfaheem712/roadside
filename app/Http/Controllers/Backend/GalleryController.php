<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function gallery(){
        $images = Gallery::all();
        return view('backend.gallery.index',compact('images'));
    }

    public function addImage(){
        return view('backend.gallery.add');
    }

    public function postImage(Request $request){
        $request->validate([
            'title' => 'required',
            'status' => 'required',
        ]);
        $data = request()->except(['_token']);
        if($request->hasFile($request->file)){
            if (isset($data['image'])) {
                $data['image_url'] = request()->file('image')->store('images/gallery');
            }
        }
        if(Gallery::create($data)){
            return redirect()->route('admin.gallery')->with(['success' => 'Image added successfully!']);
        }
        return redirect()->route('admin.gallery')->with(['error' => 'Oops, Something went wrong!']);
    }

    public function editImage($id){
        $image = Gallery::find($id);
        return view('backend.gallery.edit',compact('image'));
    }

    public function updateImage(Request $request,$id){
        $image = Gallery::find($id);
        $request->validate([
            'title' => 'required',
            'status' => 'required',
        ]);
        $data = request()->except(['_token']);
        if($request->hasFile($request->file)){
            if (isset($data['image'])) {
                if(!empty($image->image_url)){
                    Storage::delete($image->image_url);
                }
                $data['image_url'] = request()->file('image')->store('images/gallery');
            }
        }
        if($image->update($data)){
            return redirect()->route('admin.editImage',$id)->with(['success' => 'Image updated successfully!']);
        }
        return redirect()->route('admin.editImage',$id)->with(['error' => 'Oops! something went wrong!']);
    }

    public function deleteImage($id){
        $image = Gallery::find($id);
        if(!empty($image->image_url)){
            Storage::delete($image->image_url);
        }
        if($image->delete()){
            return redirect()->route('admin.gallery')->with(['success' => 'Image deleted successfully!']);
        }
        return redirect()->route('admin.gallery')->with(['error' => 'Oops! something went wrong!']);
    }

}
