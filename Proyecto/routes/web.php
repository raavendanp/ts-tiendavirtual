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
Route::get('/product/create', 'CommentController@create')->name("product.createcomment");
Route::post('/product/save', 'ProductController@save')->name("product.save");
Route::post('/product/create', 'CommentController@save')->name("comment.save");
Route::get('/product/save', 'HomeController@goindex');
Route::delete('/product/delete', 'ProductController@delete')->name("product.delete");
Route::get('/product/delete', 'HomeController@goindex');
Route::get('/checkout', 'CheckoutController@show')->name("product.checkout");
Route::get('/category/all', 'CategoryController@all')->name("category.all");