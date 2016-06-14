<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();
Route::get('/dashboard', 'DashboardController@index');

Route::get('/', function() {
    return view('home');
});
Route::get('/home', function() {
    return view('home');
});
Route::get('/documentation', function() {
    return view('documentation');
});
Route::get('/installation', function() {
    return view('installation');
});
