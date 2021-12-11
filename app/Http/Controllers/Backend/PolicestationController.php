<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\policestation;

class PolicestationController extends Controller
{
    public function policestationList()
    {
        $lists = policestation::all();//table a sob dekhanor jonno
        return view('admin.layouts.station-list' ,compact('lists'));//compact korci list table a dekhanor jonno
    }

    public function stationCreate()
    {
        return view('admin.layouts.policestation-create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        policestation::create([
            // field name from DB ||  field name from form
            'dmp'=>$request->dmp,
            'name'=>$request->name,
            'address'=>$request->address,
            'telephone'=>$request->telephone,
            'cell'=>$request->cell,
            'email'=>$request->email,
        ]);
        return redirect()->route('admin.stations');//back();
    }


}