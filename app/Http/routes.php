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

Route::get('/', 'TasklistsController@index');
//Route::get('/', function() {
//	return view('welcome');
//});

//Route::get('/', 'WelcomeController@index');

Route::resource('tasklists', 'TasklistsController');

//ユーザ登録
Route::get('signup', 'Auth\AuthController@getRegister')->name('signup.get');
Route::post('signup', 'Auth\AuthController@postRegister')->name('signup.post');

// ログイン認証
Route::get('login', 'Auth\AuthController@getLogin')->name('login.get');
Route::post('login', 'Auth\AuthController@postLogin')->name('login.post');
Route::get('logout', 'Auth\AuthController@getLogout')->name('logout.get');

// ログイン認証付き
Route::group(['middleware' => 'auth'], function() {
	Route::resource('tasklists', 'TasklistsController', ['only' => ['index', 'create', 'edit', 'show']]);
});
