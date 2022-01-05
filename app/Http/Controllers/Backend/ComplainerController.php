<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Complaintform;
use Illuminate\Http\Request;

class ComplainerController extends Controller
{

    public function complainerList()
    {

$lists=Complaintform::all();


        return view('admin.layouts.complainer-list' ,compact ('lists'));
    }

    


}

