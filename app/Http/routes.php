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

Route::get('/', function () {
dd('test');
    return view('welcome');
});
Route::get('/ggg', function(){
    dd('test');
});


Route::get('fire', function () {
    // this fires the event
    event(new App\Events\EventName());
    return "event fired";
});

Route::get('test', function () {
    // this checks for the event
    return view('test');
});