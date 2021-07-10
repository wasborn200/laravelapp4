<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('hello', 'HelloController@index');
Route::get('hello/other', 'HelloController@index');

Route::get('board', 'BoardController@index');

Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');

