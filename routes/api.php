<?php

use Illuminate\Http\Request;

Route::post('v1/auth/register', 'AuthController@register');    //Fitur API untuk register
Route::post('v1/auth/login', 'AuthController@login');  //Fitur API untuk Login
Route::get('v1/category', 'CategoryController@index'); //Menampilkan menu kategori
Route::get('v1/foods/random', 'ProductController@foodsRandom'); //Menampilkan daftar makanan dengan counter terbanyak
Route::get('v1/crafts/random', 'ProductController@craftsRandom'); //Menampilkan produk kerajinan dengan counter terbanyak 
Route::get('v1/travels/random', 'ProductController@travelsRandom'); //Menampilkan daftar tempat wisata dengan counter terbanyak 
Route::get('v1/places/food', 'PlaceController@foodPlaces'); //Menampilkan daftar tempat makan dengan counter terbanyak
Route::get('v1/subcategories/food', 'SubcategoryController@subcategoryFoods');  //Menampilkan sub kategori dalam kategori makanan
Route::get('v1/places/craft', 'PlaceController@craftPlaces'); //Menampilkan daftar tempat kerajinan dengan counter terbanyak
Route::get('v1/subcategories/craft', 'SubcategoryController@subcategoryCrafts');  //Menampilkan sub kategori dalam kategori kerajinan
Route::get('v1/places/travel', 'PlaceController@travelPlaces'); //Menampilkan daftar tempat wisata dengan counter terbanyak


Route::get('v1/user/profile', 'UserController@profile')->middleware('auth:api');
Route::post('v1/place', 'PlaceController@add')->middleware('auth:api');
Route::get('v1/place', 'PlaceController@show')->middleware('auth:api');

