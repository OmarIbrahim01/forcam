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

Route::get('/', function () {
    return view('home');
});


Route::get('/home', [
    'as' => 'home',
    'uses' => 'HomeController@home'
]);

Route::get('/products', [
    'as' => 'products_all',
    'uses' => 'HomeController@productsAll'
]);

Route::get('/contact', [
    'as' => 'contact',
    'uses' => 'HomeController@contact'
]);

Route::get('/who_we_are', [
    'as' => 'who_we_are',
    'uses' => 'HomeController@whoWeAre'
]);

Route::get('/solutions/retail', [
    'as' => 'solutions.retail',
    'uses' => 'HomeController@solutionsRetail'
]);

Route::get('/solutions/healthcare', [
    'as' => 'solutions.healthcare',
    'uses' => 'HomeController@solutionsHealthcare'
]);

Route::get('/solutions/education', [
    'as' => 'solutions.education',
    'uses' => 'HomeController@solutionsEducation'
]);






// Auth::routes();



Route::group(['prefix' => 'sudo'], function () {
    Voyager::routes();
});
