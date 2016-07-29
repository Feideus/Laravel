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

Route::get('/', 'WelcomeController@index');

Route::get('/editUser/{id}', ['uses' =>'editUserController@index']);

Route::post('/editUser/miseAJour','editUserController@miseAJour');

Route::get('/addUser', 'addUserController@index');

Route::post('/addUser/createUser','addUserController@store');


Route::get('/deleteUser/{id}',['uses' =>'WelcomeController@delete']);