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
    return view('welcome');
});

Route::get('/ledaq', 'PostsController@ledaq');

Route::get('/company', 'PostsController@company');

Route::get('/shopping', 'PostsController@shopping');

Route::get('/collection', 'PostsController@collection');

Route::get('/eventnews', 'PostsController@eventnews');

Route::get('/contact', 'PostsController@contact');

Route::get('/detail/{id?}', 'PostsController@detail');

Route::get('/create', 'PostsController@create');

Route::post('/store', 'PostsController@store');

Route::get('/category/{id?}', 'GoodsController@showCategory');
