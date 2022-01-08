<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Complaintform;
use Illuminate\Http\Request;

class ComplainerController extends Controller
{

    public function complainerList()
    {

$lists=Complaintform::all();


        return view('admin.layouts.complainer-list' ,compact ('lists'));
    }

    public function complainerDetails($complainer_id)
    {

//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
      $list=complaintform::find($complainer_id);
//      $product=Product::where('id',$product_id)->first();
        return view('admin.layouts.complainer-details',compact('list'));
    }

    public function complainerDelete($complainer_id)
    {
       complaintform::find($complainer_id)->delete();
       return redirect()->back()->with('success',' Desired Complaint is Deleted.');
    }
    


}

