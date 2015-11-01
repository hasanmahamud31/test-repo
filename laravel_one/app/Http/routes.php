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

//Route::get('/','User@index');
Route::get('/admin', function () {
    return view('admin.pages.home');
});
Route::get('/login', function () {
    return view('admin.pages.login');
});
Route::post('/login','LoginController@index');

//Route::group(['as' => 'admin::'], function () {
//    Route::get('home', ['as' => 'home'], function () {
//        return view('pages.home');
//    });
//});
//Route::get('/admin','login@index');
