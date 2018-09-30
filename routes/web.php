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
//print_r(get_included_files()); 
//die;
//Route::get('/', function () {
//    return view('welcome');
//});

// Link , Mapper
//Route::get('/', function(){
//    echo('main url');
//});
Route::get('/', 'HomePageController@getHomePage');
Route::get('/homepage2', 'HomePageController@getHomePage2');



Route::get('/contact', function(){
    echo('Contact Us Page');
});
Route::get('/login', function(){
    echo('Login page');
});
