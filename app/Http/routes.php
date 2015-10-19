
<?php

use App\Events\FileWasUploaded;


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
// Auth routes

Route::get('/', ['as' => 'front.home', 'uses' => 'FrontController@index']);
Route::get('properties', ['as' => 'front.properties', 'uses' => 'FrontController@properties']);
Route::get('property', ['as' => 'front.property', 'uses' => 'FrontController@property']);

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function()
{
  	// Authentication
    Route::get('/', ['as' => 'auth.root', 'uses' => 'AuthController@getLogin']);
    Route::get('login',  ['as' => 'auth.login', 'uses' => 'AuthController@getLogin']);
    Route::post('login', ['as' => 'auth.login', 'uses' => 'AuthController@postLogin']);
    Route::get('logout', ['as' => 'auth.logout', 'uses' => 'AuthController@getLogout']);  
});

get('file-upload', function(){
    event(new FileWasUploaded('Hello Jayde!'));
});
