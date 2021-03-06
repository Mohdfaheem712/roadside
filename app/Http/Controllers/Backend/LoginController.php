<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\WebsiteSetting;

class LoginController extends Controller
{

    public function __construct(WebsiteSetting $WebsiteSetting){
        $this->WebsiteSetting = $WebsiteSetting;
    }

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
            $user = Auth::user();
            return redirect()->intended('admin/dashboard')
            ->with(['success' => 'Welcome '.$user->name.', Your are signed in!']);
        }
  
        return redirect("admin/login")->with(['error' => 'Login details are not valid']);
    } 
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('backend.dashboard');
        }
  
        return redirect("admin/login")->with(['error' => 'Login details are not valid']);
    }

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('admin/login')->with(['success' => 'Logged out!']);;
    }
}
