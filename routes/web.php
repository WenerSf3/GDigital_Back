<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProductController;
use app\Http\Controllers\RedirectController;
use app\Http\Controllers\LinksController;

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
    return view('welcome');
});

// Produtos

Route::get('/api/product', 'ProductController@index');
Route::post('/api/product', 'ProductController@store');
Route::put('/api/product/{product}', 'ProductController@update');
Route::delete('/api/product/{product}', 'ProductController@destroy');

// redirects

Route::get('/api/redirect', 'RedirectController@index');
Route::get('/api/redirect/{id}', 'RedirectController@only');
Route::post('/api/redirect', 'RedirectController@store');
Route::put('/api/redirect/{redirect}', 'RedirectController@update');
Route::delete('/api/redirect/{redirect}', 'RedirectController@destroy');

//links

Route::get('/api/links', 'LinksController@index');
Route::get('/api/links/{links}', 'LinksController@only');
Route::post('/api/links', 'LinksController@store');
Route::put('/api/links/{links}', 'LinksController@update');
Route::delete('/api/links/{links}', 'LinksController@destroy');
