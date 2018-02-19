<?php

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
    return view('index');
});



Route::get('/about', function () {
    return view('about');
});

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('/accountsettings', function () {
    return view('accountsettings');
});

Route::get('/patients', function () {
    return view('patients');
});

Route::get('/patient_details', function () {
    return view('currentappointment');
});


Route::get('/messages', function () {
    return view('psychmessage');
    
});

Route::get('/mywallet', function () {
    return view('psychwallet');
    
});

Route::get('/ecounseling', function () {
    return view('psychcounseling');
    
});

Route::get('/ecounseling_start', function () {
    return view('psychstartcounseling');
    
});


Route::get('/user_messages', function () {
    return view('usermessage');
    
});

Route::get('/usermessages_openmessage', function () {
    return view('usernewmessage');
    
});


Route::get('/conversation', function () {
    return view('psychnewmessage');
});

Route::get('/user_profile', function () {
    return view('patientprofile');
});


Route::get('/user_appointments', function () {
    return view('patientappointment');
});

Route::get('/user_diary', function () {
    return view('wew');
});

Route::get('/user_ecounseling', function () {
    return view('patientdoctors');
});

Route::get('/user_startecounseling', function () {
    return view('patientecounseling');
});

Route::get('/user_wallet', function () {
    return view('patientwallet');
});

Route::get('/pat_accountsettings', function () {
    return view('accountsettingspatient');
});

Route::get('/regcontent', function () {
    return view('registerquestion');
})->name('registerquestions');

Route::get('/registeraspatient', function () {
    return view('auth.patregister');
});

Route::get('/registeraspsychologist', function () {
    return view('auth.psychregister');
});

Route::get('/adminlogin', function () {
    return view('auth.adminlogin');
});

Route::get('/admin', function () {
    return view('adminverifypsych');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/trytry', function () {
    return view('trytry');
});

Route::get('/video', function () {
    return view('video');
});

Route::post('/availcal', function () {
    return view('comp.availcal');
});

Route::get('/adminset', function () {
    return view('adminset');
});
Route::get('/adminpatient', function () {
    return view('adminpatient');
});

Route::get('/adminpayment', function () {
    return view('adminpayment');
});

Route::post('/availabilitytab', function () {
    return view('comp.availabilitytab');
});

Route::post('/timecalc', function () {
    return view('comp.timecalc');
});

Route::post('/timepick', function () {
    return view('comp.timepick');
});

Route::post('/edittime', function () {
    return view('comp.edittime');
});

Route::get('/timepick', function () {
    return view('comp.timepick');
});

Route::get('/register', function () {
    return view('auth.registeroptions');
});

Route::get('/appointments', function () {
    return view('appointments');
})->name('appointments');

Route::post('/appointmentstab', 'EcounselingsController@viewspefecoun');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Authentication Routes...
        //Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        //Route::post('login', 'Auth\LoginController@login');
        //Route::post('logout', 'Auth\LoginController@logout')->name('logout');
//
        // Registration Routes...
        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'Auth\RegisterController@register');

Route::get('signup/{user}', 'Auth\RegisterController@redusertype');
Route::get('signup', 'Auth\RegisterController@showRegistrationOptions');

Route::post('RegisterControllerPsych','Auth\RegisterController@registerpsych');
Route::post('RegisterControllerPat','Auth\RegisterController@registerpat');
Route::post('AddAppointment','EcounselingsController@addapp');
Route::post('DeleteAppointment','EcounselingsController@cancelapp');
Route::post('AddAvailability','AvailabilityController@addavail');
Route::get('GetAvailabilitySpefDate','AvailabilityController@getavailspefdate');
Route::get('/retapp','EcounselingsController@retapppsych');
