<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\WebsiteSetting;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function profile(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        
        $data = request()->except(['_token','password']);
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        User::where('id', $user_id)->update($data);
        return redirect("admin/profile")->withSuccess('Details Updated Successfully');
    }

    public function updatewebsiteSetting(Request $request){

        $request->validate([
            'title' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        
        $data = request()->except(['_token']);
        WebsiteSetting::where('id', 1)->update($data);
        return redirect("admin/profile")->withSuccess('Website Details Updated Successfully');
    }
}
