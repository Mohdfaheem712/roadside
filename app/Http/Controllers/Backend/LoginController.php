<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::user()) {
            return redirect()->intended('admin/dashboard');
        }
        return view('backend.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    } 
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('backend.dashboard');
        }
  
        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }

    public function profile(){
        $user = Auth::user();
        return view('backend.profile',$user);
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('admin/login');
    }
}
