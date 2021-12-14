<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Nid;

class NidController extends Controller
{

    public function nidList()
    {
        return view('admin.layouts.nid-list');
    }


    public function nidCreate()
    {
        return view('admin.layouts.nid-create');
    }

    public function store(Request $request)
    {

        //validation
        $request->validate ([

            'nid_no'=>'required|min:13',
            'name'=>'required',
            'fname'=>'required',
            'mname'=>'required',
            'cell'=>'required|min:11',
            'email'=>'required|email',
            'birthday'=>'required',
            'address'=>'required',

        ]);


        // dd($request->all());
       nid::create([
            // field name from DB ||  field name from form
            'nid_no'=>$request->dmp,
            'name'=>$request->name,
            'fname'=>$request->name,
            'mname'=>$request->name,
            'cell'=>$request->cell,
            'email'=>$request->email,
            'birthdate'=>$request->birthdate,
            'address'=>$request->address,
        ]);
        return redirect()->route('admin.nids');//back();
    }


    


}

