<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::group(['domain' => '3dtlac.ostrovfestival.dev'], function() {

    Route::group(['before' => 'auth.custom'], function() {
        Route::get('/admin',['as' => 'admin', 'uses' =>'AdminController@index']);
        Route::get('/news/create',['as' => 'news.create', 'uses' => 'NewsController@create']);
        Route::post('/news',['as' => 'news.store', 'uses' => 'NewsController@store']);
        Route::get('/news/{id}/edit',['as' => 'news.edit', 'uses' => 'NewsController@edit']);
        Route::put('/news/{id}',['as' => 'news.update', 'uses' => 'NewsController@update']);
        Route::delete('/news/{id}',['as' => 'news.delete', 'uses' => 'NewsController@destroy']);
        // Route::get('/upload',['as' => 'admin.image', 'uses' => 'AdminController@image']);
        Route::post('/image',['as'=>'admin.image.upload','uses'=>'AdminController@imageUpload']);
    });

    Route::get('/', function()
    {
        return View::make('index');
    });
    Route::get('/team', function() {
        return View::make('team');
    });
    Route::get('/documents', function() {
        return View::make('documents');
    });

    Route::get('/login', ['as' => 'login', 'uses' => 'LoginController@index']);
    Route::post('/login',['as' => 'login.post', 'uses' => 'LoginController@login']);
    Route::get('/logout',['as' => 'logout', 'uses' => 'LoginController@logout']);
    Route::get('/news', 'NewsController@index');
    Route::get('/news/{id}',['as' => 'news.detail', 'uses' => 'NewsController@show']);


});


Route::get('/', function(){
    return View::make('ostrovfestival.index');
});
