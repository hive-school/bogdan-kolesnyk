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

Route::get('/', 'MessageController@showAll');
Route::get('/message/{id?}', 'MessageController@showMessage');
Route::get('login', 'UserController@login');
Route::get('contacts', 'UserController@contacts');

