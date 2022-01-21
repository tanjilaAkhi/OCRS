<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Complaintform;
use Illuminate\Http\Request;

class SurveyController extends Controller
{

    public function surveyList(Request $request)
    {
        
        $monitors=Complaintform::all();
        $search = $request->query('search');
        // dd($search);
        // dd(request()->all());
        if ($search) {
            $monitors = complaintform::where('cname', 'Like', '%' . $search . '%')
                ->orWhere('cname', 'like', '%' . $search . '%')->get();
                // dd('in if');
                return view('admin.layouts.dashboardcontent' ,compact ('monitors'));
            }
            else {
                return view('admin.layouts.dashboardcontent' ,compact ('monitors'));
            }

    


}}
