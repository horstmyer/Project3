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
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/lorem', 'LoremController@getIndex');
Route::post('/lorem', 'LoremController@postIndex');

Route::get('/dummy', 'DummyController@getIndex');
Route::post('/dummy', 'DummyController@postIndex');
