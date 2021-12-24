<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
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
        
        
                if(Auth::attempt($userInfo)){
                   
                    return redirect()->route('user.form.create')->with('message','verified successfully.');
                }
             return redirect()->route('user.verification')->withErrors('Invalid user credentials');
           

    }

    public function caseformCreate()
    {
        return view('user.websites.complaintform-create');
    }



    public function complaint_typeStore(Request $request)
    {


        //validation
        // $request->validate([

        //     'casenumber'=>'required',
        //     'casetype'=>'required',
        //     'casedetails'=>'required',
            

        // ]);


        complainttype::create([
            // field name from DB ||  field name from form
            'casenumber'=>$request->casenumber,
            'casetype'=>$request->casetype,
            'casedetails'=>$request->casedetails,
            'casenumber'=>$request->casenumber,
            'casetype'=>$request->casetype,
            'casedetails'=>$request->casedetails,
            'casenumber'=>$request->casenumber,
            'casetype'=>$request->casetype,
            'casedetails'=>$request->casedetails,
            
        ]);
        return redirect()->route('user.verification');//back();
    }


}
