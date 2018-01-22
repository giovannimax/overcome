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

Route::get('/login', function () {
    return view('login');
});

Route::get('/video', function () {
    return view('video');
});

Route::post('/availcal', function () {
    return view('comp.availcal');
});

Route::post('/availabilitytab', function () {
    return view('comp.availabilitytab');
});

Route::post('/timecalc', function () {
    return view('comp.timecalc');
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