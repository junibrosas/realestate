
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

// Admin Routes
include( base_path().'/Xadmin/routes.php' );

Route::get('properties', ['as' => 'front.properties', 'uses' => 'FrontController@properties']);

Route::get('category/{slashData?}', ['as' => 'front.category', 'uses' => 'FrontController@category'])
    ->where('slashData', '(.*)');

// Errors
Route::group(['prefix' => 'error'], function()
{
    Route::get('404', ['as' => 'front.error-404', 'uses' => 'ErrorController@error404']);
});

// Auth routes
Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function()
{
  	// Authentication
    Route::get('/', ['as' => 'auth.root', 'uses' => 'AuthController@getLogin']);
    Route::get('/', ['as' => 'auth.index', 'uses' => 'AuthController@getLogin']);
    Route::get('login',  ['as' => 'auth.login', 'uses' => 'AuthController@getLogin']);
    Route::post('login', ['as' => 'auth.login', 'uses' => 'AuthController@postLogin']);
    Route::get('logout', ['as' => 'auth.logout', 'uses' => 'AuthController@getLogout']);  
});

// This route should be the last routing to implement.
Route::get('/{slug?}', ['as' => 'front.index', 'uses' => 'FrontController@index']);

