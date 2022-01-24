<?php

namespace App\Http\Controllers\MainController;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MainController extends Controller
{
   // contact er method calling
    public function website()
    {
        return view('user');
    }

    // end emergencycontact er method calling

    // adminlogin page er calling
    public function adminlogin()
    {
        return view('admin.layouts.login');
    }

    // end adminlogin page er method calling



    

    
}
