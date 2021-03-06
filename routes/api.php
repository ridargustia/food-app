<?php

use Illuminate\Http\Request;

Route::post('v1/auth/register', 'AuthController@register');    //Fitur API untuk register
Route::post('v1/auth/login', 'AuthController@login');  //Fitur API untuk Login
Route::get('v1/category', 'CategoryController@index'); //Menampilkan menu kategori
Route::get('v1/foods/random', 'ProductController@foodsRandom'); //Menampilkan daftar makanan dengan counter terbanyak
Route::get('v1/crafts/random', 'ProductController@craftsRandom'); //Menampilkan produk kerajinan dengan counter terbanyak 
// Route::get('v1/travels/random', 'PlaceController@travelsRandom'); //Menampilkan daftar tempat wisata dengan counter terbanyak 
Route::get('v1/places/food', 'PlaceController@foodPlaces'); //Menampilkan daftar tempat makan dengan counter terbanyak
Route::get('v1/subcategories/food', 'SubcategoryController@subcategoryFoods');  //Menampilkan sub kategori dalam kategori makanan
Route::get('v1/places/craft', 'PlaceController@craftPlaces'); //Menampilkan daftar tempat kerajinan dengan counter terbanyak
Route::get('v1/subcategories/craft', 'SubcategoryController@subcategoryCrafts');  //Menampilkan sub kategori dalam kategori kerajinan
Route::get('v1/places/travel', 'PlaceController@travelPlaces'); //Menampilkan daftar tempat wisata dengan counter terbanyak
Route::get('v1/subcategories/travel', 'SubcategoryController@subcategoryTravels'); //Menampilkan sub kategori wisata
Route::get('v1/products/travel', 'ProductController@travelsRandom'); //Menampilkan produk/spot wisata dengan counter terbanyak
Route::get('v1/articles/random', 'ArticleController@index'); //Menampilkan daftar artikel secara random
Route::post('v1/search/places', 'PlaceController@search'); //Menampilkan daftar place dengan search
Route::post('v1/search/products', 'ProductController@search'); //Menampilkan daftar product dengan search
Route::get('v1/detail/places/{id}', 'PlaceController@detailPlaceById'); //Menampilkan detail place by id dan include product
Route::get('v1/detail/products/{id}', 'ProductController@detailProductById'); //Menampilkan detail product by id dan place terkait + include product lain yg terkait
Route::get('v1/user/profile', 'UserController@profile')->middleware('auth:api'); //Menampilkan profil user dengan include places
Route::get('v1/user/list', 'RosterController@index')->middleware('auth:api'); //Menampilkan list yang dimiliki masing2 user
Route::get('v1/products/random', 'ProductController@productsRandom'); //Menampilkan daftar products secara random sebanyak 20 data
Route::get('v1/places/random', 'PlaceController@placesRandom'); //Menampilkan daftar places secara random sebanyak 4 data
Route::get('v1/productsnonspot/random', 'ProductController@productsNonSpot'); //Menampilkan daftar product selain spot wisata secara random sebanyak 20 data
Route::get('v1/spots/random', 'ProductController@spotsRandom'); //Menampilkan daftar spot wisata secara random sebanyak 20 data
Route::get('v1/travelsplace/random', 'PlaceController@travelsPlaceRandom'); //Menampilkan daftar places wisata secara random sebanyak 20 data (Explore)
Route::get('v1/placesnontravel/random', 'PlaceController@placesNonTravel'); //Menampilkan daftar places non wisata secara random sebanyak 20 data (Explore)
Route::put('v1/user/edit', 'UserController@update')->middleware('auth:api'); //Fitur edit profile user (User Login)

Route::post('v1/place', 'PlaceController@add')->middleware('auth:api');
Route::get('v1/place', 'PlaceController@show')->middleware('auth:api');

