<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::group(['before' => 'guest'], function(){
    Route::get('login', 'SessionController@create');
    Route::resource('session', 'SessionController');
    Route::get('register', 'UserController@create');
    Route::resource('user', 'UserController');
});
Route::group(['before' => 'auth'], function(){
    Route::get('logout', 'SessionController@destroy');
    Route::get('/', 'MessageController@index');
    Route::get('contacts', 'ContactController@index');
    Route::get('settings', 'UserController@index');

    Route::resource('message', 'MessageController');
    Route::resource('contact', 'ContactController');
});



