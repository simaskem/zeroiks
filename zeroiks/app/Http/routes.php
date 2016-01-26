<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web']], function () {
    
    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

    Route::get('logout', 'Auth\AuthController@getLogout');

    Route::resource('game', 'GameController');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



    Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');

    Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');

});
