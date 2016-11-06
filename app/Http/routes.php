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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test','Screen\InteractionController@Test');

Route::get('/ActivityScreen','Screen\InteractionController@ScreenView');


Route::get('/Table','Screen\InteractionController@TableView');

Route::get('/Form','Screen\InteractionController@FormView');
Route::auth();

Route::get('/home', 'HomeController@index');
