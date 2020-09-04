<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/index', 'HomeController@index')->name("pages.index");
Route::get('/contact', 'HomeController@contact')->name("pages.contact");
Route::get('/product/show', 'ProductController@show')->name("product.show");
Route::get('/product/showDetails/{id}/', 'ProductController@showDetails')->name("product.showDetails");
Route::get('/product/create', 'ProductController@create')->name("product.create");
Route::post('/product/save', 'ProductController@save')->name("product.save");
Route::get('/product/save', 'HomeController@goindex');
Route::delete('/product/delete', 'ProductController@delete')->name("product.delete");
Route::get('/product/delete', 'HomeController@goindex');
Route::any('/{any}', 'HomeController@goindex');