<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Notice;

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

    // notice er method calling
    public function notice()
    {
        $Notices = Notice::all();
        return view('user.websites.notice',compact('Notices'));
      
    }

    // end notice er method calling
    
}
