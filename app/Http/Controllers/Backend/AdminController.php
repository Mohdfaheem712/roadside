<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\WebsiteSetting;
use App\Models\UserQueries;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class AdminController extends Controller
{

    public function __construct(WebsiteSetting $WebsiteSetting,UserQueries $UserQueries){
        $this->WebsiteSetting = $WebsiteSetting;
        $this->UserQueries = $UserQueries;
    }

    public function profile(){
        $user = Auth::user();
        return view('backend.profile',compact('user'));
    }

    public function updateProfile(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        
        $data = request()->except(['_token','password']);
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        if(User::where('id', $user_id)->update($data)){
            Session::flash('message', $user->name .' details updated successfully.'); 
            Session::flash('type', 'success');
            Session::flash('icon', 'check');
        }else{
            Session::flash('message', 'Oops! something went wrong.'); 
            Session::flash('type', 'warning');
            Session::flash('icon', 'warning');
        }
        return redirect("admin/profile");
    }

    public function setting(){
        $setting = $this->WebsiteSetting->find(1);
        return view('backend.setting',compact('setting'));
    }

    public function updateSetting(Request $request){

        $request->validate([
            'title' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
        $data = request()->except(['_token']);
        $setting = $this->WebsiteSetting->find(1);
        if($request->hasFile($request->file)){
            if (isset($data['logo'])) {
                if(!empty($setting->logo)){
                    Storage::delete($setting->logo);
                }
                $data['logo'] = request()->file('logo')->store('images/logo');
            }
        }
        if($setting->update($data)){
            Session::flash('message', 'Settings updated successfully.'); 
            Session::flash('type', 'success');
            Session::flash('icon', 'check');
        }
        else{
            Session::flash('message', 'Oops! something went wrong.'); 
            Session::flash('type', 'warning');
            Session::flash('icon', 'warning');
        }
        Session::flash('time',  Carbon::now()->diffForHumans());
        return redirect("admin/setting");
    }

    public function queries(){
        $queries = $this->UserQueries->all();
        return view('backend.queries',compact('queries'));
    }
    
    public function gallery(){
        $images = Gallery::all();
        return view('backend.gallery',compact('images'));
    }

    public function editImage($id){
        $image = Gallery::find($id);
        return view('backend.edit_image',compact('image'));
    }

}
