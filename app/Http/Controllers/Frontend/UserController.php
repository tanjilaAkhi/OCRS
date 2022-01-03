<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Complaintform;
use App\Models\Nid;
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
        // dd($userInfo);
        $userFind = Nid::where('nid_no',$userInfo)->get();
        // dd($userFind->all());
        if (empty($userFind->all())) {
            return redirect()->route('user.verification')->with('success','Invalid user credentials');
        }
        else {
            return redirect()->route('user.form.create')->with('error','verified successfully.');

            
        }
                
             
           

    }
    //form er code

    public function caseformCreate()
    {
        return view('user.websites.complaintform-create');
    }
//end form er code


    public function store(Request $request)
    {


        //validation
        $request->validate([

            'date'=>'required',
            'time'=>'required',
            'cname'=>'required',
            'c_address'=>'required',
            'cell'=>'required',
            'email'=>'required|email',
            'casetype'=>'required',
            'details'=>'required',
            'dname'=>'required',
            'address'=>'required',

        ]);


        Complaintform::create([
            // field name from DB ||  field name from form
            'date'=>$request->date,
            'time'=>$request->time,
            'cname'=>$request->cname,
            'c_address'=>$request->c_address,
            'cell'=>$request->cell,
            'email'=>$request->email,
            'casetype'=>$request->casetype,
            'details'=>$request->details,
            'dname'=>$request->dname,
            'address'=>$request->address,
            'photo'=>$request->photo,
            
        ]);
        return redirect()->route('user.form.confirmation');//back();
    }


    public function confirmation()
    {
        return view('user.websites.confirmation');
    }


}
