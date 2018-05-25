<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*-------
TASK 6.1
-------*/
//Countries API Routes
Route::get('countries', 'CountryAPIController@index');
Route::get('countries/show', 'CountryAPIController@show');
Route::post('countries/store', 'CountryAPIController@store');
Route::put('countries/update', 'CountryAPIController@update');
Route::delete('countries/destroy', 'CountryAPIController@destroy');

//Roles API Routes
Route::get('roles', 'RoleAPIController@index');
Route::get('roles/show', 'RoleAPIController@show');
Route::post('roles/store', 'RoleAPIController@store');
Route::put('roles/update', 'RoleAPIController@update');
Route::delete('roles/destroy', 'RoleAPIController@destroy');

//Category API Routes
Route::get('categories', 'CategoryAPIController@index');
Route::get('categories/show', 'CategoryAPIController@show');
Route::post('categories/store', 'CategoryAPIController@store');
Route::put('categories/update', 'CategoryAPIController@update');
Route::delete('categories/destroy', 'CategoryAPIController@destroy');

//Users API Routes
Route::get('users', 'UserAPIController@index');
Route::get('users/show', 'UserAPIController@show');
Route::post('users/store', 'UserAPIController@store' );
Route::put('users/update', 'UserAPIController@update');
Route::delete('users/destroy', 'UserAPIController@destroy');
