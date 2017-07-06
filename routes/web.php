<?php


//pages
Route::get('/', 'PagesController@home')->name('home');
Route::get('about', 'PagesController@about')->name('about');

//kuos
Route::get('kuos/show', 'KuosController@show')->name('kuos.show');
Route::get('kuos', 'KuosController@index')->name('kuos.index');
Route::get('kuos/create', 'KuosController@create')->name('kuos.create');

//users and sessions
Route::get('signin', 'SessionsController@create')->name('signin');
Route::get('signup', 'UsersController@create')->name('signup');
