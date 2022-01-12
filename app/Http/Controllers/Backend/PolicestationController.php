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


       

        //validation
        $request->validate([

            'dmp'=>'required',
            'name'=>'required',
            'address'=>'required',
            'cell'=>'required|min:11',
            'email'=>'required|email',

        ]);
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

//code for the crud operation

    public function policestationDetails($station_id)
    {

//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
      $policestation=policestation::find($station_id);
//      $product=Product::where('id',$product_id)->first();
        return view('admin.layouts.policestation-details',compact('policestation'));
    }

    public function policestationDelete($station_id)
    {
       policestation::find($station_id)->delete();
       return redirect()->back()->with('success','Policestation is Deleted.');
    }

    public function policestationEdit($id){
        // dd($id);
        $policestations = policestation::all();
       $policestation = policestation::find($id);
        if ($policestation) {
            return view('admin.layouts.update-policestation',compact('policestation'));
        }

    }

    public function policestationUpdate(Request $request,$id){
        //dd($request->all());
        $policestation = policestation::find($id);
        if ($policestation) {
            $policestation->update([
                'dmp'=>$request->dmp,
            'name'=>$request->name,
            'address'=>$request->address,
            'telephone'=>$request->telephone,
            'cell'=>$request->cell,
            'email'=>$request->email,
            ]);
            return redirect()->route('admin.stations');
        }
    }



}
