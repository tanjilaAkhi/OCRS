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
        return redirect()->route('main')->with('message','Logging out.');
    }

    //feedback code
    public function feedback(Request $request)
    {
        // $reviews=Feedback::orderBy('id','desc')->paginate(1);
        $reviews=Feedback::all();
        $search = $request->query('search');
        // dd($search);
        // dd(request()->all());
        if ($search) {
            $reviews = Feedback::where('email', 'Like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')->get();
                // dd('in if');
        
        return view('user.websites.userfeedback',compact('reviews'));
    }
        else {
            return view('user.websites.userfeedback',compact('reviews'));}
        }



        //DMP services
    public function assistancevictim()
   {
       return view('user.partials.assistance-to-the-victim');
   }

   public function daycare()
   {
       return view('user.partials.day-care-center');
   }

   public function fireoutbreak()
   {
       return view('user.partials.in-case-of-fire-outbreak');
   }

   public function personalsecurity()
   {
       return view('user.partials.personal-security');
   }

   public function policebloodbank()
   {
       return view('user.partials.police-blood-bank');
   }

     //end DMP services     

    }
    //end feedback code
      


    
   //form er code
    
