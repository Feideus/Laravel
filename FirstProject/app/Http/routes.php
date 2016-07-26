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

Route::get('contact', 'WelcomeController@contact');

Route::get('DifferentController', 'NewController@index');

Route::get('DifferentController/TryOut', 'NewController@TryOut');

Route::get('DifferentController/Contact', 'NewController@Contact');

Route::get('DifferentController/Datas', 'NewController@Datas');

Route::get('descriptions', 'DescriptionController@index');