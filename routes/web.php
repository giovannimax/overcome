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
})->name('index');

Route::get('/inquiries', function () {
    return view('inquiries');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/profile', function () {
    return view('profile');
});

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
    if(Auth::user()->usertype == "pat")
    return view('usernewmessage');
    else 
    return view('psychmessage');
});

Route::get('/mywallet', function () {
    return view('psychwallet');
    
});

Route::get('/ecounseling', function () {
    if(Auth::user()->usertype=="pat")
    return view('patientecounseling');
    else
    return view('psychcounseling');
    
})->name('ecounseling');

Route::get('/diary', function () {
    return view('patientdiary');
    
})->name("diary");

Route::get('/ecounseling_start', function () {
    return view('psychstartcounseling');
    
});


Route::get('/user_messages', function () {
    return view('usermessage');
    
});

Route::get('/checksession', function () {
    return view('checksession');
});

Route::get('/checkavail', function () {
    return view('comp.availchecker');
    
});



Route::get('/conversation', function () {
    return view('psychnewmessage');
});
Route::get('/admin', function () {
    return view('adminverifypsych');
})->name('admin');

Route::get('/adminverified', function () {
    return view('adminverifiedpsych');
});

Route::get('/admindeclined', function () {
    return view('admindeclinedpsych');
});

Route::get('/user_profile', function () {
    return view('patientprofile');
});

Route::get('/user_diary', function () {
    return view('wew');
});

Route::get('/user_ecounseling', function () {
    return view('patientdoctors');
});

Route::get('/convomenu', function () {
    return view('comp.convomenu');
});

Route::get('/convoloader', function () {
    return view('comp.convoloader');
});
Route::get('/convoloaderpat', function () {
    return view('comp.convoloaderpat');
});

Route::get('/user_wallet', function () {
    return view('patientwallet');
});

Route::get('/pat_accountsettings', function () {
    return view('accountsettingspatient');
});

Route::get('/findpsychologist', function () {
    return view('registerquestion');
})->name('registerquestion');

Route::get('/adminlogin', function () {
    return view('auth.adminlogin');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/trytry', function () {
    return view('trytry');
});

Route::get('/browsepsych', function () {
    return view('comp.browsepsych');
});

Route::get('/viewpsych', function () {
    return view('comp.viewpsych');
});

Route::get('/video', function () {
    return view('video');
});

Route::get('/availcal', function () {
    return view('comp.availcal');
});

Route::get('/adminset', function () {
    return view('adminset');
})->name('adminset');
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

Route::get('/psychologist', function () {
    return view('auth.psychregister');
});

Route::get('/viewadminpsych', function () {
    return view('viewadminpsych');
});

Route::get('/patient', function () {
    return view('auth.patregister');
});

Route::get('/diaryloader', function () {
    return view('comp.diaryloader');
});

Route::get('/sessionloader', function () {
    return view('comp.sessionloader');
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
      //  Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        //Route::post('register', 'Auth\RegisterController@register');

//Route::get('signup/{user}', 'Auth\RegisterController@redusertype');

//functions

Route::get('signup', 'Auth\RegisterController@showRegistrationOptions');
Route::post('RegisterControllerPsych','Auth\RegisterController@registerpsych');
Route::post('RegisterControllerPat','Auth\RegisterController@registerpat');
Route::get('AddAppointment','EcounselingsController@addapp');
Route::post('AddAppointment','EcounselingsController@addapp');
Route::post('DeleteAppointment','EcounselingsController@cancelapp');
Route::post('AddAvailability','AvailabilityController@addavail');
Route::get('editdiary','DiariesController@updatediary');
Route::post('CheckAvail','AvailabilityController@checkavail');
Route::get('GetAvailabilitySpefDate','AvailabilityController@getavailspefdate');
Route::get('/retapp','EcounselingsController@retapppsych');
Route::post('CreateDiary','DiariesController@creatediary');
Route::get('RetDiary','DiariesController@retdiaries');
Route::get('sendmsg','MessagesController@sendmsg');
Route::post('RegisterControllerRed','Auth\RegisterController@redirectuser');
Route::post('addpostappointment','EcounselingsController@addpostapp');
Route::post('updatepsych','Auth\RegisterController@updatepsych');
Route::get('approvepsych','PsychologistsController@approvepsych');
Route::get('declinepsych','PsychologistsController@declinepsych');
Route::get('sendmsg','MessagesController@sendmsg');
Route::get('createadmin','AdminsController@createadmin');
Route::get('deactadmin','AdminsController@deactadmin');
Route::get('addinquiry','AdminsController@addinquiry');
Route::get('approvepat','EcounselingsController@approvepat');
Route::get('addcomment','DiariesController@addcomment');
Route::get('updatenotes','EcounselingsController@updatenotes');
