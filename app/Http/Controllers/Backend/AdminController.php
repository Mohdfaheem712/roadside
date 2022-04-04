<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\WebsiteSetting;
use App\Models\UserQueries;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


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
            return redirect("admin/profile")->with(['success' => $user->name .' details updated successfully.!']);
        }
        return redirect("admin/profile")->with(['error' => 'Oops, Something went wrong!']);
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
            return redirect("admin/setting")->with(['success' => 'Settings updated successfully!']);
        }
        return redirect("admin/setting")->with(['error' => 'Oops, Something went wrong!']);
    }

    public function queries(){
        $queries = $this->UserQueries->all();
        return view('backend.queries',compact('queries'));
    }
    
}
