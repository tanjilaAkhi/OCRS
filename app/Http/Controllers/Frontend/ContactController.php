<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactController extends Controller
{
   // contact er method calling
    public function contact()
    {
        return view('user.websites.contact');
    }

    // end emergencycontact er method calling


    // emergencycontact er method calling
    public function emergencycontact()
    {
        return view('user.websites.emergencycontact');
    }

    // end emergencycontact er method calling
    
    
    public function main()
    {
        return view('main');
    }
    
}
