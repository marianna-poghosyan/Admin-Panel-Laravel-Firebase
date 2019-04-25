<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::group(['middleware' => ['web','auth']], function () {
    Route::get('/', 'HomeController@index')->name("main");
    Route::get('/trips', 'HomeController@trips')->name("trips");
    Route::get('/stay', 'HomeController@stay')->name("stay");
    Route::get('/food', 'HomeController@food')->name("food");
    Route::get('/friends', 'HomeController@friends')->name("friends");
    Route::get('/visa', 'HomeController@visa')->name("visa");
    Route::get('/session', 'HomeController@session')->name("session");
    Route::get('/calendar', 'HomeController@calendar')->name("calendar");
    Route::get('/tables', 'HomeController@tables')->name("tables");

    Route::group(['prefix' => 'guests',  'middleware' => 'isAdmin'], function() {
        Route::get('/','GuestsController@index')->name('guests.index');
        Route::put('/update','GuestsController@update')->name('guests.update');
        Route::get('/fire','GuestsController@fire'); //TODO REMOVE
    });

    Route::get('/home', 'HomeController@index');
});
