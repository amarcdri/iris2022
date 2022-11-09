<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    //
    
    public function login()
    {
        return view('admin.login');
    }
    
    public function loginverify(Request $request)
    {
        // $email=$request->input('email');
        // $password=$request->input('password');
        $check=$request->all();
        if(Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']]))
        {
            return redirect()->route('admin.dashboard')->with('error','login successfully');
        }
        else
        {
            return back()->with('error','Please enter valid credential');
        }
        
        
        return view('admin.dashboard');
    }
    
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    
    public function logout()
    {
        Auth::guard('admin')->logout();
        return Redirect()->route('admin.login')->with('error','Admin Logout Successfully');
    }
    
    public function register()
    {
        return view('admin.register');
    }
}
