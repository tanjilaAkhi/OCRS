<?php

use App\Http\Controllers\Backend\PolicestationController;
use App\Http\Controllers\Backend\Complaint_typeController;
use App\Http\Controllers\Backend\ComplainerController;
use App\Http\Controllers\Backend\FeedbackController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\SurveyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\UserloginController;
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





    // Route::group(['prefix'=>'user-portal'],function(){
    // Route::group(['middleware'=>'auth'],function (){ //middleware applied in the whole section to prevent the unauthorized access
        // Route::get('/', function () {
        //     return view('admin.master');
        // })->name('admin');



        

Route::group(['prefix'=>'user'],function(){

    //User login
    Route::get('/verification',[UserloginController::class,'verification'])->name('user.verification');
    Route::post('/verification',[UserloginController::class,'verified'])->name('user.do.verification');
// //end User login 

Route::get('/', function () {
    return view('user.master');



})->name ('user');
    //Contact
    Route::get('/contact',[ContactController::class,'contact'])->name('user.contact');
    //end Contact

    //Emergency contact
    Route::get('/emergencycontact',[ContactController::class,'emergencycontact'])->name('user.emergencycontact');
    //end emergency contact

    //User registration
    Route::get('/registration',[UserController::class,'registration'])->name('user.registration');
    Route::post('/registrations/submit',[UserController::class,'submit'])->name('admin.registrations.submit');
    //end user registration

    //feedback
    Route::get('/feedback',[UserloginController::class,'feedback'])->name('user.feedback');
    // Route::get('/feedback/delete/{feedback_id}',[UserloginController::class,'feedbackDelete'])->name('admin.feedback.delete');
    //end feedback

    //DMP services
    Route::get('/assistance-to-the-victim',[UserloginController::class,'assistancevictim'])->name('user.assistance-to-the-victim');
    Route::get('/day-care-center',[UserloginController::class,'daycare'])->name('user.day-care-center');
    Route::get('/in-case-of-fire-outbreak',[UserloginController::class,'fireoutbreak'])->name('user.in-case-of-fire-outbreak');
    Route::get('/personal-security',[UserloginController::class,'personalsecurity'])->name('user.personal-security');
    Route::get('/police-blood-bank',[UserloginController::class,'policebloodbank'])->name('user.police-blood-bank');
   
    //end DMP serivces
    
  Route::group(['middleware'=>['auth','Userlogin']],function (){ 
    
    //sign out
    Route::get('/logout',[UserloginController::class,'logout'])->name('user.logout');
    //end sign out

    //complaint registration
    Route::get('/form/create',[UserController::class,'caseformCreate'])->name('user.form.create');// form create korer jonno
    Route::post('/form/store',[UserController::class,'store'])->name('user.form.store');//database a data submit korer  jonno
    Route::get('/form/status/Solved//{id}',[UserController::class,'status_solved'])->name('user.form.status.solved');
    Route::get('/form/delete/{id}',[UserController::class,'InfoDelete'])->name('admin.info.delete');
    Route::get('/form/confirmation',[UserController::class,'confirmation'])->name('user.form.confirmation');
    Route::get('/form/table',[UserController::class,'complainertable'])->name('admin.complainer.table');
    //end complaint registration 




});

});

//end user panel related
       

//admin panel related



Route::group(['prefix'=>'admin-portal'],function(){

//Admin login
Route::get('/login',[LoginController::class,'page'])->name('admin.login');
Route::post('/login',[LoginController::class,'login'])->name('admin.do.login');
// //end Admin login 

  Route::group(['middleware'=>['auth','Adminlogin']],function (){ //middleware applied in the whole section to prevent the unauthorized access
    Route::get('/', function () {
        return view('admin.master');
    })->name('admin');


    //sign out
    Route::get('/logout',[LoginController::class,'logout'])->name('admin.logout');
    //end sign out
//admin profile
Route::get('/profile',[LoginController::class,'profile'])->name('admin.profile');
//end admin profile

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
    Route::get('/complainers/view/{complainer_id}',[ComplainerController::class,'complainerDetails'])->name('admin.complainer.details');
    Route::get('/nids/delete/{complainer_id}',[ComplainerController::class,'complainerDelete'])->name('admin.complainer.delete');
    //end complainer list


    //complainer list
    
    Route::get('/surveys',[SurveyController::class,'surveyList'])->name('admin.surveys');
    //end complainer list

    //Feedback Route
   
    Route::get('/feedbacks',[FeedbackController::class,'feedbackList'])->name('admin.feedbacks');//list show koranor jonno
    Route::get('/feedbacks/create',[FeedbackController::class,'feedbackCreate'])->name('admin.feedbacks.create');// form create korer jonno
    Route::post('/feedbacks/store',[FeedbackController::class,'store'])->name('admin.feedbacks.store');//database a data submit korer  jonno
    Route::get('/feedbacks/view/{id}',[FeedbackController::class,'feedbackDetails'])->name('admin.feedback.details');
    Route::get('/feedbacks/delete/{id}',[FeedbackController::class,'feedbackDelete'])->name('admin.feedback.delete');
    Route::get('/feedbacks/edit/{id}',[FeedbackController::class,'feedbackEdit'])->name('admin.feedback.edit');
    Route::put('/feedbacks/update/{id}',[FeedbackController::class,'feedbackUpdate'])->name('admin.feedback.update');
    //End Feedback Route
    
});//end admin panel

});

