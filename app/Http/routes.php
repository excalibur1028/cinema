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
    'uses' => 'PurchaseController@show'
]);

Route::group(['middleware' => 'auth'], function() {
    Route::get('tickets/completed', [
        'as' => 'tickets.completed',
        'uses' => 'TicketsController@completed'
    ]);

    Route::resource('tickets', 'TicketsController');

    Route::post('tickets/purchase', [
        'as' => 'tickets.purchase',
        'uses' => 'TicketsController@purchase'
    ]);

});


Route::group(['prefix' => 'dashboard', 'middleware' => 'admin'], function() {

    Route::get('/', [
        'as'   => 'dashboard.home',
        'uses' => 'DashboardController@index'
    ]);

    Route::post('movie/{movie}/schedule', [
        'as'   => 'dashboard.schedule.store',
        'uses' => 'SchedulesController@store']);

    Route::resource('movie', 'MoviesController', ['except' => 'index']);
});


