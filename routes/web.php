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

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/availabilitytab', function () {
    return view('comp.availabilitytab');
});

Route::post('/appointmentstab', 'EcounselingsController@viewspefecoun');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
