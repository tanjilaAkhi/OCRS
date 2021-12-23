<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller
{
   

    //NID form method

    public function verification()
    {
        return view('user.websites.varification');
    }

    public function caseformCreate()
    {
        return view('user.websites.complaintform-create');
    }


}
