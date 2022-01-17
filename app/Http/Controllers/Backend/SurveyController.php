<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Complaintform;
use Illuminate\Http\Request;

class SurveyController extends Controller
{

    public function surveyList()
    {
        
        $monitors=Complaintform::all();
        
        
                return view('admin.layouts.dashboardcontent' ,compact ('monitors'));
            }

    


}
