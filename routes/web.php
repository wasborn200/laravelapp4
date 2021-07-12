<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('hello', 'HelloController@index');
Route::get('hello/other', 'HelloController@index');

Route::get('board', 'BoardController@index');

Route::get('board/add', 'BoardController@add')->middleware('auth');
Route::post('board/add', 'BoardController@create');

Route::get('thread', 'ThreadController@index');

Route::get('thread/add', 'ThreadController@add')->middleware('auth');
Route::post('thread/add', 'ThreadController@create');

Route::get('thread/show', 'ThreadController@show');
