<?php
// Admin routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin-auth', 'namespace' => 'Xadmin\Controllers'], function()
{
	Route::get('/', ['as' => 'admin.root', 'uses' => 'DashboardController@index']); // 'root' is route name used to make the application index url separate from the rest of the pages and routes.
    Route::resource('pages', 'PageController');
    Route::resource('posts', 'PostController');
    Route::resource('files', 'FileController');
    Route::resource('menu', 'MenuController');
    Route::resource('users', 'UserController');

    Route::get('post-media', ['as' => 'admin.post-media.index', 'uses' => 'PostController@postMedia']);
    Route::post('post-media-store', ['as' => 'admin.post-media.store', 'uses' => 'PostController@storePostMedia']);

});

// Admin Public Routes
Route::group(['prefix' => 'admin', 'namespace' => 'Xadmin\Controllers'], function()
{
	// Authentication
    Route::get('login',  ['as' => 'auth.login', 'uses' => 'AuthController@getLogin']);
    Route::post('login', ['as' => 'auth.login', 'uses' => 'AuthController@postLogin']);
    Route::get('logout', ['as' => 'auth.logout', 'uses' => 'AuthController@getLogout']);
});