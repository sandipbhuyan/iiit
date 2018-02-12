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
Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/recieve-details', function () {
    return view('recieve.register');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/register-blood',function(){
  return view('donate');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('api/send-donor','APIController@donateBlood');
Route::post('api/get-blood','APIController@recieveBlood');
Route::get('/recieve/{bid}','APIController@getBlood');

Route::middleware(['maintenance'])->prefix(env('MAINTENANCE_URL').'/{password}')->group(function() {
    Route::get('/', 'SetupController@getMaintenance');
    Route::post('/', 'SetupController@postMaintenance')->name('postmn');
});
