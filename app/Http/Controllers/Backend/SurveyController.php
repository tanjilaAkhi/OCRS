<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
// use App\Models\Complaintform;
use Illuminate\Http\Request;

class SurveyController extends Controller
{

    public function surveyList()
    {

// $lists=Complaintform::all();,compact ('lists')


        // return view('admin.layouts.dashboardcontent');
        return view('admin.layouts.dashboardcontent');
    }

    


}
