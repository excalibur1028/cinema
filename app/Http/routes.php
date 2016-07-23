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

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@home'
]);


Route::auth();

Route::get('purchase/{movie}', [
    'as' => 'purchase.movie',
    'uses' => 'HomeController@show'
]);

Route::group(['prefix' => 'dashboard', 'middleware' => 'admin'], function() {

    Route::get('/', [
        'as'   => 'dashboard.home',
        'uses' => 'DashboardController@index'
    ]);

    Route::resource('movie', 'MoviesController', ['except' => 'index']);

    Route::post('movie/{movie}/schedule', [
        'as'   => 'dashboard.schedule.store',
        'uses' => 'SchedulesController@store']);
});


