<?php

use App\Http\Controllers\Backend\PolicestationController;
use App\Http\Controllers\Backend\Complaint_typeController;
use App\Http\Controllers\Backend\ComplainerController;
use App\Http\Controllers\Backend\NidController;
use App\Http\Controllers\Backend\LoginController;
use Illuminate\Support\Facades\Route;
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
//Route::group(['prefix'=>'user-portal'],function(){

    Route::get('/', function () {
        return view('user.master');
    });//->name ('user');


//Contact
Route::get('/contact',[ContactController::class,'contact'])->name('user.contact');
//end Contact

//Emergency contact
Route::get('/emergencycontact',[ContactController::class,'emergencycontact'])->name('user.emergencycontact');
//end emergency contact

//NID verification
Route::get('/verification',[UserController::class,'verification'])->name('user.verification');
Route::post('/verified',[UserController::class,'verified'])->name('user.do.verification');
Route::get('/form/create',[UserController::class,'caseformCreate'])->name('user.form.create');// form create korer jonno
Route::post('/form/store',[UserController::class,'store'])->name('user.form.store');//database a data submit korer  jonno
Route::get('/form/confirmation',[UserController::class,'confirmation'])->name('user.form.confirmation');
Route::get('/form/view/{info_id}',[UserController::class,'complainerdetails'])->name('admin.complainer.details');
//end NID + case filed 


//end user panel related
//});


//admin panel related



Route::group(['prefix'=>'admin-portal'],function(){

//Admin login
Route::get('/login',[LoginController::class,'page'])->name('admin.login');
Route::post('/login',[LoginController::class,'login'])->name('admin.do.login');
// //end Admin login 

  Route::group(['middleware'=>'auth'],function (){ //middleware applied in the whole section to prevent the unauthorized access
    Route::get('/', function () {
        return view('admin.master');
    })->name('admin');


    //sign out
    Route::get('/logout',[LoginController::class,'logout'])->name('admin.logout');
    //end sign out


    //pilce station//
    Route::get('/stations',[PolicestationController::class,'policestationList'])->name('admin.stations');//list show koranor jonno
    Route::get('/stations/create',[PolicestationController::class,'stationCreate'])->name('admin.stations.create');// form create korer jonno
    Route::post('/stations/store',[PolicestationController::class,'store'])->name('admin.stations.store');//database a data submit korer  jonno
    Route::get('/stations/view/{station_id}',[PolicestationController::class,'policestationDetails'])->name('admin.station.details');
    Route::get('/stations/delete/{station_id}',[PolicestationController::class,'policestationDelete'])->name('admin.station.delete');
    Route::get('/stations/edit/{id}',[PolicestationController::class,'policestationEdit'])->name('admin.station.edit');
    Route::put('/stations/update/{id}',[PolicestationController::class,'policestationUpdate'])->name('admin.station.update');
    
    //end police station


    
    //complaint type
    Route::get('/complaint_types',[Complaint_typeController::class,'complaint_typeList'])->name('admin.complaint_types');
    Route::get('/complaint_types/create',[Complaint_typeController::class,'complaint_typeCreate'])->name('admin.complaint_types.create');
    Route::post('/complaint_types/store',[Complaint_typeController::class,'complaint_typeStore'])->name('admin.complaint_types.store');
    Route::get('/complaint_types/view/{complainttype_id}',[Complaint_typeController::class,'complainttypeDetails'])->name('admin.complaint_types.details');
    Route::get('/complaint_types/delete/{complainttype_id}',[Complaint_typeController::class,'complainttypeDelete'])->name('admin.complaint_types.delete');
    Route::get('/complaint_types/edit/{id}',[Complaint_typeController::class,'complainttypeEdit'])->name('admin.complaint_types.edit');
    Route::put('/complaint_types/update/{id}',[Complaint_typeController::class,'complainttypeUpdate'])->name('admin.complaint_types.update');
    
    
    //end complaint type



    //complainer list
    
    Route::get('/complainers',[ComplainerController::class,'complainerList'])->name('admin.complainers');
    //end complainer list

    //NID information Code
   
    Route::get('/nids',[NidController::class,'nidList'])->name('admin.nids');//list show koranor jonno
    Route::get('/nids/create',[NidController::class,'nidCreate'])->name('admin.nids.create');// form create korer jonno
    Route::post('/nids/store',[NidController::class,'store'])->name('admin.nids.store');//database a data submit korer  jonno
    Route::get('/nids/view/{$Nid_id}',[NidController::class,'nidDetails'])->name('admin.nid.details');
     Route::get('/nids/delete/{Nid_id}',[NidController::class,'nidDelete'])->name('admin.nid.delete');
    Route::get('/nids/edit/{id}',[NidController::class,'nidEdit'])->name('admin.nid.edit');
    Route::put('/nids/update/{id}',[NidController::class,'nidUpdate'])->name('admin.nid.update');
    //End NID information Code
    
});//end admin panel

});

