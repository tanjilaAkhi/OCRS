<?php

use App\Http\Controllers\Backend\PolicestationController;
use App\Http\Controllers\Backend\Complaint_typeController;
use App\Http\Controllers\Backend\ComplainerController;
use Illuminate\Support\Facades\Route;

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
   // return redirect()->route('admin');
   return ('main');
});


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
    
});