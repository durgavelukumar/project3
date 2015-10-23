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

Route::get('/', 'LoremController@getHomePage');

Route::get('/lorem', 'LoremController@getLoremPage');
Route::post('/lorem', 'LoremController@postLoremPage');

Route::get('/userGen', 'UserGenController@getUserGenPage');
Route::post('/userGen', 'UserGenController@postUserGenPage');



