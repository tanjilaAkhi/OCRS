<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Feedback;

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

    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.verification')->with('message','Logging out.');
    }

    //feedback code
    public function feedback()
    {
        $reviews=Feedback::orderBy('id','desc')->paginate(1);
        return view('user.websites.userfeedback',compact('reviews'));
    }
    //end feedback code
      
    public function feedbackDelete($feedback_id)
    {
    Feedback::find($feedback_id)->delete();
       return redirect()->route('user')->with('success','Record is Deleted.');
    }

          

   //form er code
    
}