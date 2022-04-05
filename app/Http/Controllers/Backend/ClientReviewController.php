<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\ClientReviews;

class ClientReviewController extends Controller
{
    public function clientReviews(){
        $reviews = ClientReviews::all();
        return view('backend.client-reviews.index',compact('reviews'));
    }

    public function addReview(){
        return view('backend.client-reviews.add');
    }

    public function postReview(Request $request){
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'message' => 'required',
        ]);
        $data = request()->except(['_token']);
        if($request->hasFile($request->file)){
            if (isset($data['image'])) {
                $data['image_url'] = request()->file('image')->store('images/review');
            }
        }
        if(ClientReviews::create($data)){
            return redirect()->route('admin.client-reviews')->with(['success' => 'Review added successfully!']);
        }
        return redirect()->route('admin.client-reviews')->with(['error' => 'Oops! something went wrong!']);
    }

    public function editReview($id){
        $review = ClientReviews::find($id);
        return view('backend.client-reviews.edit',compact('review'));
    }

    public function updateReview(Request $request,$id){
        $review = ClientReviews::find($id);
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
            return redirect()->route('admin.editReview',$id)->with(['success' => 'Review updated successfully!']);
        }
        return redirect()->route('admin.editReview',$id)->with(['error' => 'Oops! something went wrong!']);
    }

    public function deleteReview($id){
        $review = ClientReviews::find($id);
        if(!empty($review->image_url)){
            Storage::delete($review->image_url);
        }
        if($review->delete()){
            return redirect()->route('admin.client-reviews')->with(['success' => 'Review deleted successfully!']);
        }
        return redirect()->route('admin.client-reviews')->with(['error' => 'Oops! something went wrong!']);
    }
}
