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
Route::get('sp_details','HomeController@sp_details');


Route::get('search','HomeController@Search');
Route::post('search','HomeController@Post_Search');

Route::get('home','HomeController@index');
Route::post('home', 'HomeController@Post_index');

Route::get('sign-up','HomeController@sign_up');

Route::get('sign-up-sp','HomeController@sign_up_sp');
Route::post('sign-up-sp','HomeController@Post_sign_up_sp');

Route::get('sign-up-user','HomeController@sign_up_user');
Route::post('sign-up-user','HomeController@Post_sign_up_user');

Route::get('login','HomeController@login');
Route::post('login','HomeController@Post_Login');

Route::get('reset-password','HomeController@reset_password');
Route::post('reset-password','HomeController@Post_reset_password');

Route::get('map','HomeController@map');
Route::get('sp_name/{id}/{service_id}','HomeController@sp_name');
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
