<?php

use App\Http\Controllers\Backend\PolicestationController;
use App\Http\Controllers\Backend\Complaint_typeController;
use App\Http\Controllers\Backend\ComplainerController;
use App\Http\Controllers\Backend\NidController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


    Route::get('/', function () {
        return view('user.master');
    });


    //Contact
Route::get('/contact',[ContactController::class,'contact'])->name('user.contact');
//end Contact

//Emergency contact
Route::get('/emergencycontact',[ContactController::class,'emergencycontact'])->name('user.emergencycontact');
//end emergency contact

//NID verification
Route::get('/verification',[UserController::class,'verification'])->name('user.verification');




//end user panel related



//admin panel related

Route::group(['prefix'=>'admin-portal'],function(){
    Route::get('/', function () {
        return view('admin.master');
    })->name('admin');
    //pilce station//
    Route::get('/stations',[PolicestationController::class,'policestationList'])->name('admin.stations');//list show koranor jonno
    Route::get('/stations/create',[PolicestationController::class,'stationCreate'])->name('admin.stations.create');// form create korer jonno
    Route::post('/stations/store',[PolicestationController::class,'store'])->name('admin.stations.store');//database a data submit korer  jonno
    //end police station
    
    //complaint type
    Route::get('/complaint_types',[Complaint_typeController::class,'complaint_typeList'])->name('admin.complaint_types');
    Route::get('/complaint_types/create',[Complaint_typeController::class,'complaint_typeCreate'])->name('admin.complaint_types.create');
    Route::post('/complaint_types/store',[Complaint_typeController::class,'complaint_typeStore'])->name('admin.complaint_types.store');
    //end complaint type

    //complainer list
    
    Route::get('/complainers',[ComplainerController::class,'complainerList'])->name('admin.complainers');
    //end complainer list

    //NID information Code
   
    Route::get('/nids',[NidController::class,'nidList'])->name('admin.nids');//list show koranor jonno
    Route::get('/nids/create',[NidController::class,'nidCreate'])->name('admin.nids.create');// form create korer jonno
    Route::post('/nids/store',[NidController::class,'store'])->name('admin.nids.store');//database a data submit korer  jonno
  
    //End NID information Code
    
});//end admin panel

