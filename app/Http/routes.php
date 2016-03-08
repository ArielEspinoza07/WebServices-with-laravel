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

Route::get('/', function () {
    return view('welcome');
});

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

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['prefix'=>'api'], function(){

  Route::group(['prefix'=>'user'],function(){

    Route::get('',['uses'=>'UserController@allUsers']);
    Route::get('{id}',['uses'=>'UserController@getUser']);
    Route::post('',['uses'=>'UserController@saveUser']);
    Route::put('{id}',['uses'=>'UserController@updateUser']);
    Route::delete('{id}',['uses'=>'UserController@deleteUser']);

  });

  Route::group(['prefix'=>'role'],function(){

    Route::get('',['uses'=>'RoleController@allRoles']);
    Route::get('{id}',['uses'=>'RoleController@getRole']);
    Route::post('',['uses'=>'RoleController@saveRole']);
    Route::put('{id}',['uses'=>'RoleController@updateRole']);
    Route::delete('{id}',['uses'=>'RoleController@deleteRole']);

  });

  Route::group(['prefix'=>'auth'],function(){

    Route::group(['prefix'=>'login'],function(){

      Route::get('',['uses'=>'AuthController@getLogin']);
      Route::post('',['uses'=>'AuthController@postLogin']);

    });

  });
});
