<?php

use Illuminate\Http\Request;

Route::post('v1/auth/register', 'AuthController@register');    //Fitur API untuk register
Route::post('v1/auth/login', 'AuthController@login');  //Fitur API untuk Login
Route::get('v1/category', 'CategoryController@index');
Route::get('v1/foods/random', 'ProductController@foodsRandom');
Route::get('v1/crafts/random', 'ProductController@craftsRandom');
Route::get('v1/travels/random', 'ProductController@travelsRandom');
Route::get('v1/places/food', 'PlaceController@foodPlaces');

Route::get('v1/user/profile', 'UserController@profile')->middleware('auth:api');
Route::post('v1/place', 'PlaceController@add')->middleware('auth:api');
Route::get('v1/place', 'PlaceController@show')->middleware('auth:api');

