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

//Restaurants API Routes
Route::get('restaurants', 'RestaurantAPIController@index');
Route::get('restaurants/show', 'RestaurantAPIController@show');
Route::post('restaurants/store', 'RestaurantAPIController@store');
Route::put('restaurants/update', 'RestaurantAPIController@update');
Route::delete('restaurants/destroy', 'RestaurantAPIController@destroy');

//Restaurant Post Comment API Route
Route::get('restaurantPostComment', 'RestaurantPostCommentAPIController@show');
Route::get('restaurantId', 'RestaurantIdAPIController@show');
