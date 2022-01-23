<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\complainttype;

class Complaint_typeController extends Controller
{
    public function complaint_typeList(Request $request)
    {
        $types = complainttype::all();
        $search = $request->query('search');
        // dd($search);
        // dd(request()->all());
        if ($search) {
            $types = complainttype::where('casetype', 'Like', '%' . $search . '%')
                ->orWhere('casetype', 'like', '%' . $search . '%')->get();
                // dd('in if');
            return view('admin.layouts.complaint_type-list', compact('types'));
        }
        else {
            return view('admin.layouts.complaint_type-list ' ,compact('types'));
        }
       
    }
//create form
    public function complaint_typeCreate()
    {
        return view('admin.layouts.complaint_type-create');
    }
    //end create form

    //store info into the database
    
    public function complaint_typeStore(Request $request)
    {


        //validation
        $request->validate([

            'casenumber'=>'required',
            'casetype'=>'required',
            'casedetails'=>'required',
            

        ]);


        complainttype::create([
            // field name from DB ||  field name from form
            'casenumber'=>$request->casenumber,
            'casetype'=>$request->casetype,
            'casedetails'=>$request->casedetails,
            
        ]);
        return redirect()->route('admin.complaint_types');//back();
    }
    //end store info into the database
    

    //code for the crud operation

    public function complainttypeDetails($complainttype_id)
    {

//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
      $complainttype=complainttype::find($complainttype_id);
//      $product=Product::where('id',$product_id)->first();
        return view('admin.layouts.complaint_type-details',compact('complainttype'));
    }

    public function complainttypeDelete($complainttype_id)
    {
       complainttype::find($complainttype_id)->delete();
       return redirect()->back();
    }

    public function complainttypeEdit($id){
        // dd($id);
        $complainttypes = complainttype::all();
       $complainttype = complainttype::find($id);
        if ($complainttype) {
            return view('admin.layouts.update-complaint_type',compact('complainttype'));
        }

    }

    public function complainttypeUpdate(Request $request,$id){
        //dd($request->all());
        $complainttype = complainttype::find($id);
        if ($complainttype) {
            $complainttype->update([
                'casenumber'=>$request->casenumber,
            'casetype'=>$request->casetype,
            'casedetails'=>$request->casedetails,
            ]);
            return redirect()->route('admin.complaint_types')->with('success',' Data is Updated.');
        }
    }

   

}
