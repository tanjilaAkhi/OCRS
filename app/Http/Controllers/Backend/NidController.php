<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Nid;

class NidController extends Controller
{

    public function nidList()
    {
        $nids = Nid::all();
        return view('admin.layouts.nid-list' , compact('nids'));
    }


    public function nidCreate()
    {
        return view('admin.layouts.nid-create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

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
            'nid_no'=>$request->nid_no,
            'name'=>$request->name,
            'fname'=>$request->fname,
            'mname'=>$request->mname,
            'cell'=>$request->cell,
            'email'=>$request->email,
            'birthdate'=>$request->birthdate,
            'address'=>$request->address,
        ]);
        return redirect()->route('admin.nids');//back();
    }

    public function nidDetails($Nid_id)
    {
        // dd($request->$Nid_id);
     
//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
      $Nid=Nid::find($Nid_id);
//      $product=Product::where('id',$product_id)->first();
        
        return view('admin.layouts.nid-details',compact('Nid'));
}

    public function nidDelete($Nid_id)
    {
    Nid::find($Nid_id)->delete();
       return redirect()->back()->with('success','Nid is Deleted.');
    }

    public function nidEdit($id){
        // dd($id);
        $Nids = Nid::all();
       $Nid = Nid::find($id);
        if ($Nid) {
            return view('admin.layouts.update-nid',compact('Nid'));
        }

    }

    public function nidUpdate(Request $request,$id){
        //dd($request->all());
        $Nid = Nid::find($id);
        if ($Nid) {
            $Nid->update([
                'nid_no'=>$request->nid_no,
            'name'=>$request->name,
            'fname'=>$request->fname,
            'mname'=>$request->mname,
            'cell'=>$request->cell,
            'email'=>$request->email,
            'birthdate'=>$request->birthdate,
            'address'=>$request->address,
            ]);
            return redirect()->route('admin.nids');
        }
    }


    


}

