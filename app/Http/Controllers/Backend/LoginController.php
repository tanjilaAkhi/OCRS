<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function page()
    {
        return view('admin.layouts.login');
    }

    

    public function login(Request $request)
    {
        // dd($request->all());
        $userInfo=$request->except('_token');
        //        $credentials['email']=$request->user_email;
        //        $credentials['password']=$request->user_password;
        //        dd($credentials);
        //        $credentials=$request->only('user_email','user_password');
        
        
                if(Auth::attempt($userInfo)){
                   
                    return redirect()->route('admin')->with('alert','Login successful.');
                }
                return redirect()->route('admin.login')->with('sms','Invalid user credentials');
           

    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('main')->with('message','Logging out.');
    }

    public function profile()
    {
        return view('admin.partials.adminprofile');
    }
    
    


}
