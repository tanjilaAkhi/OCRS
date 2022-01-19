<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Complaintform;
use App\Models\Nid;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   
    
    

    public function caseformCreate()
    {
        return view('user.websites.complaintform-create');
    }
//end form er code


    public function store(Request $request)
    {

//  dd($request->all());
        //picture uploading
        $image_name=null;
        //              step 1: check image exist in this request.
                         if($request->hasFile('image'))
                         {
                             // step 2: generate file name
                             $image_name=date('Ymdhis') .'.'. $request->file('image')->getClientOriginalExtension();
        
                             //step 3 : store into project directory
        
                             $request->file('image')->storeAs('/uploads',$image_name);
        
                         }
        //end picture uploading

        //validation
        $request->validate([

            'date'=>'required',
            'time'=>'required',
            'cname'=>'required',
            'c_address'=>'required',
            'cell'=>'required|min:11',
            'email'=>'required|email',
            'casetype'=>'required',
            'details'=>'required',
            'dname'=>'required',
            'address'=>'required',
            'policestation'=>'required',
            'issued_at'=>'required',
            'officername'=>'required',
            'officeremail'=>'required|email',
            'officerphone'=>'required|min:11',
            

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
            'image'=>$image_name,
            'policestation'=>$request->policestation,
            'issued_at'=>$request->issued_at,
            'officername'=>$request->officername,
            'officeremail'=>$request->officeremail,
            'officerphone'=>$request->officerphone,
            
        ]);
        return redirect()->route('user.form.confirmation');//back();
    }


    public function confirmation()
    {
        return view('user.websites.confirmation');
    }


    public function complainertable()
    {
        // $informations = complaintform::table('complainer')->latest('id')->first();
        $informations = complaintform::orderBy('id','desc')->paginate(1);
       return view('user.websites.pdftable',compact('informations'));
    }


    public function status_solved($id){
        $monitor = complaintform::find($id);
        if($monitor->case_status)
        {
            $monitor->update([
                'case_status' => 'solved'
            ]);
        }
    
        return redirect()->back()->with('success','Case Solved');
    }


    public function InfoDelete($id)
    {
       complaintform::find($id)->delete();
       return redirect()->back()->with('success','Policestation is Deleted.');
    }



    //registration
    public function registration()
    {
        return view('user.websites.userregistration');
    }

    public function submit(Request $request)
    {


       

        //validation
        // $request->validate([

        //     'dmp'=>'required',
        //     'name'=>'required',
        //     'address'=>'required',
        //     'cell'=>'required|min:11',
        //     'email'=>'required|email',
        //     'officername'=>'required',
        //     'officeremail'=>'required|email',
        //     'officerphone'=>'required|min:11',

        // ]);
        // dd($request->all());
        User::create([
            // field name from DB ||  field name from form
            
            'name'=>$request->name,
            'cell'=>$request->cell,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            

        ]);
        return redirect()->back()->with('success','Registration Successful.');;
    }

    //end registration
    
}

 
