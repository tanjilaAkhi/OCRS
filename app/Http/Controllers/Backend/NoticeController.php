<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{

    public function noticeList( Request $request)
    {
        $Notices=Notice::all();
        $search = $request->query('search');
        // dd($search);
        // dd(request()->all());
        if ($search) {
            $Notices = Notice::where('date', 'Like', '%' . $search . '%')
                ->orWhere('date', 'like', '%' . $search . '%')->get();
                // dd('in if');
            return view('admin.layouts.notice-list', compact('Notices'));
        }
        else {
            return view('admin.layouts.notice-list',compact('Notices'));
        }
        
    }


    public function noticeCreate()
    {
        return view('admin.layouts.notice-create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        //validation
         $request->validate ([

         'date'=>'required',
         'notice'=>'required',
         
       

         ]);


        // dd($request->all());
        Notice::create([
            // field name from DB ||  field name from form
            'date'=>$request->date,
            'notice'=>$request->notice,
            
            
        ]);
        return redirect()->route('admin.notices');//back();
    }

    

    public function noticekDelete($id)
    {
    Notice::find($id)->delete();
       return redirect()->back();
    }

    public function noticeEdit($id){
        // dd($id);
        $Notices = Notice::all();
       $Notice = Notice::find($id);
        if ($Notice) {
            return view('admin.layouts.update-notice',compact('Notice'));
        }

    }

    public function noticeUpdate(Request $request,$id){
        //dd($request->all());
        $Notice = Notice::find($id);
        if ($Notice) {
            $Notice->update([
                'date'=>$request->date,
            'notice'=>$request->notice,
            
            ]);
            return redirect()->route('admin.notices')->with('success','Record is Updated.');
        }
    }


    


}

