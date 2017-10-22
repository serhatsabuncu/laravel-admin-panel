<?php


Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
	Route::get('/', 'HomeController@index')->name('home');
	Route::get('/home', 'HomeController@index')->name('home');

	Route::resource('user', 'UserController');
	Route::get('profile', 'UserController@profile');
});
