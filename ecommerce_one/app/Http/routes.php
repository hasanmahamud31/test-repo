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

Route::get('/admin','Auth\AuthController@getLogin');
Route::get('/',function() {
    return view('welcome');
});

/**
 * admin login route .......
*/
Route::get('/deshboard', function () {
    if (Auth::guest()) {
        return Redirect::to('/admin');
    } else {
        return view('admin.pages.home');
    }
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

//// Registration routes...
//Route::get('auth/register', 'Auth\AuthController@getRegister');
//Route::post('auth/register', 'Auth\AuthController@postRegister');
/**
 * Display Register Page.....
 */
Route::get('/register',  function (){

   return view('admin.pages.forms.register') ;
});
/**
 * Add A New Task
 */
Route::post('/register','Admin\AdminRegCon@store');
/**
 * display all register admin user....
 */
Route::get('/access_control_manage', function () {
    return view('admin.pages.forms.access_control_manage') ;
});
/**
 * Delete An Existing Task
 */
Route::delete('/register/{id}', function ($id) {
    //
});

