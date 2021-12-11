<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\complainttype;

class Complaint_typeController extends Controller
{
    public function complaint_typeList()
    {
        $types = complainttype::all();
        return view('admin.layouts.complaint_type-list ' ,compact('types'));
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
        complainttype::create([
            // field name from DB ||  field name from form
            'casenumber'=>$request->casenumber,
            'casetype'=>$request->casetype,
            'casedetails'=>$request->casedetails,
            
        ]);
        return redirect()->route('admin.complaint_typs');//back();
    }
    //end store info into the database
    
   

}
