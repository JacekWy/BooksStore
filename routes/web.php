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

Route::get('/Bookstore', 'BookStoreController@index' );
Route::get('/Bookstore/about', 'BookStoreController@about' );
Route::get('/Bookstore/contact', 'BookStoreController@contact' );
Route::get('/Bookstore/Books', 'BookStoreController@Books' );
Route::get('/Bookstore/Bookadd', 'BookStoreController@Bookadd' );


Route::post('/Bookstore/Bookinsert', 'BookStoreController@Bookinsert' );

