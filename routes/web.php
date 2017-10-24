<?php

Route::get('/', 'Auth\LoginController@showLoginIfNeeded');

Route::get('home', 'HomeController@index')->name('home');
Route::get('updatepassword', 'UpdatePasswordController@showUpdatePassword')->name('updatepassword');

Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('updatepassword', 'UpdatePasswordController@updatePassword')->name('updatedpassword');