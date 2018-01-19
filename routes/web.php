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
});
Route::get('/appointments', function () {
    return view('appointments');
});

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


Route::get('/messages_openmessage', function () {
    return view('psychnewmessage');
});

Route::get('/user_profile', function () {
    return view('patientprofile');
});


Route::get('/user_appointments', function () {
    return view('patientappointment');
});

Route::get('/user_diary', function () {
    return view('patientdiary');
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





Route::get('/login', function () {
    return view('login');
    
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
