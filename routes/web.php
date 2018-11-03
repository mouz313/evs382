<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomePageController@getHomePage');
Route::get('/registration', 'UserController@getRegistrationPage');
Route::post('/registration', 'UserController@postRegistrationForm');





Route::get('/ep-admin', 'AdminController@getHomePage');
Route::get('/ep-admin/add-products', 'ProductsController@getAddProductsPage');
Route::post('/ep-admin/add-products', 'ProductsController@postAddProductsPage');
