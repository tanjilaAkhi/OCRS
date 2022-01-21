<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{

    public function feedbackList(Request $request)
    {
        $Feedbacks=Feedback::all();
        $search = $request->query('search');
        // dd($search);
        // dd(request()->all());
        if ($search) {
            $Feedbacks = Feedback::where('policestation', 'Like', '%' . $search . '%')
                ->orWhere('policestation', 'like', '%' . $search . '%')->get();
                // dd('in if');
            return view('admin.layouts.feedback-list', compact('Feedbacks'));
        }
        else {
            return view('admin.layouts.feedback-list' , compact('Feedbacks'));
        }
        
    }


    public function feedbackCreate()
    {
        return view('admin.layouts.feedback-create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        //validation
         $request->validate ([

         'email'=>'required|email',
         'name'=>'required',
         'casetype'=>'required',
         'policestation'=>'required',
         'officername'=>'required',
         'feedback'=>'required',
       

         ]);


        // dd($request->all());
        Feedback::create([
            // field name from DB ||  field name from form
            'email'=>$request->email,
            'name'=>$request->name,
            'casetype'=>$request->casetype,
            'policestation'=>$request->policestation,
            'officername'=>$request->officername,
            'feedback'=>$request->feedback,
            
        ]);
        return redirect()->route('admin.feedbacks');//back();
    }

    public function feedbackDetails($id)
    {
        // dd($request->$Nid_id);
     
//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
      $Feedback=Feedback::find($id);
//      $product=Product::where('id',$product_id)->first();
        
        return view('admin.layouts.feedback-details',compact('Feedback'));
}

    public function feedbackDelete($id)
    {
    Feedback::find($id)->delete();
       return redirect()->back()->with('success','Record is Deleted.');
    }

    public function feedbackEdit($id){
        // dd($id);
        $Feedbacks = Feedback::all();
       $Feedback = Feedback::find($id);
        if ($Feedback) {
            return view('admin.layouts.update-feedback',compact('Feedback'));
        }

    }

    public function feedbackUpdate(Request $request,$id){
        //dd($request->all());
        $Feedback = Feedback::find($id);
        if ($Feedback) {
            $Feedback->update([
                'email'=>$request->email,
            'name'=>$request->name,
            'casetype'=>$request->casetype,
            'policestation'=>$request->policestation,
            'officername'=>$request->officername,
            'feedback'=>$request->feedback,
            ]);
            return redirect()->route('admin.feedbacks');
        }
    }


    


}

