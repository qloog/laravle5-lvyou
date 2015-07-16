<?php

/**
 * Frontend Controllers
 */
Route::get('/', ['as' => 'home', 'uses' => 'FrontendController@index']);
Route::get('/introduction', ['as' => 'introduction', 'uses' => 'FrontendController@introduction']);

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
//Route::get('password/email', 'Auth\PasswordController');

/**
 * These frontend controllers require the user to be logged in
 */
Route::group(['middleware' => 'auth'], function ()
{
//    Route::get('dashboard', ['as' => 'frontend.dashboard', 'uses' => 'WelcomeController@index']);
//    Route::resource('profile', 'ProfileController', ['only' => ['edit', 'update']]);
});