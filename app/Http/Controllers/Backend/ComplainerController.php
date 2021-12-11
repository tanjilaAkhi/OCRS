<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ComplainerController extends Controller
{

    public function complainerList()
    {
        return view('admin.layouts.complainer-list');
    }

    


}

