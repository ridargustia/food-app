<?php

use Illuminate\Http\Request;

Route::post('auth/register', 'AuthController@register');    //Fitur API untuk register
Route::post('auth/login', 'AuthController@login');  //Fitur API untuk Login
Route::get('user/profile', 'UserController@profile')->middleware('auth:api');
Route::post('place', 'PlaceController@add')->middleware('auth:api');
Route::get('place', 'PlaceController@show')->middleware('auth:api');

