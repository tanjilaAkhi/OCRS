<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserloginController extends Controller
{
   //NID form method

   public function verification()
   {
       return view('user.websites.verification');
   }


   public function verified(Request $request)
    {
    // dd($request->all());
        $userInfo=$request->except('_token');
        //        $credentials['email']=$request->user_email;
        //        $credentials['password']=$request->user_password;
        //        dd($credentials);
        //        $credentials=$request->only('user_email','user_password');
        
        // dd($userInfo);
                if(Auth::attempt($userInfo)){
                   
                    return redirect()->route('user.form.create')->with('message','Login successful.');
                }
                return redirect()->route('user.verification')->with('sms','Invalid user credentials');
           

    } 
            
          

   //form er code
    
}