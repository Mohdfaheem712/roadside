<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function services(){
        $services = Services::all();
        return view('backend.services.index',compact('services'));
    }

    public function addService(){
        return view('backend.services.add');
    }

    public function postService(Request $request){
        
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'description' => 'required',
        ]);
        $data = request()->except(['_token']);
        if($request->hasFile($request->file)){
            if (isset($data['icon'])) {
                $data['icon_url'] = request()->file('icon')->store('images/service');
            }
        }
        if(Services::create($data)){
            return redirect()->route('admin.services')->with(['success' => 'Service added successfully!']);
        }
        return redirect()->route('admin.services')->with(['error' => 'Oops! something went wrong!']);
    }

    public function editService($id){
        $review = Services::find($id);
        return view('backend.services.edit',compact('service'));
    }

    public function updateService(Request $request,$id){
        $review = Services::find($id);
        $request->validate([
            'title' => 'required',
            'status' => 'required',
        ]);
        $data = request()->except(['_token']);
        if($request->hasFile($request->file)){
            if (isset($data['image'])) {
                if(!empty($review->image_url)){
                    Storage::delete($review->image_url);
                }
                $data['image_url'] = request()->file('image')->store('images/review');
            }
        }
        if($review->update($data)){
            return redirect()->route('admin.editService',$id)->with(['success' => 'Service updated successfully!']);
        }
        return redirect()->route('admin.editService',$id)->with(['error' => 'Oops! something went wrong!']);
    }

    public function deleteService($id){
        $review = Services::find($id);
        if(!empty($review->image_url)){
            Storage::delete($review->image_url);
        }
        if($review->delete()){
            return redirect()->route('admin.services')->with(['success' => 'Review deleted successfully!']);
        }
        return redirect()->route('admin.services')->with(['error' => 'Oops! something went wrong!']);
    }
}
