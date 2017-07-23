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

Route::get('/good/{id?}', 'GoodsController@good');

//Route::get('/cart/{id?}', 'GoodsController@cart');

Route::get('/create', 'PostsController@create');

Route::post('/store', 'PostsController@store');

Route::get('/category/{id?}', 'GoodsController@showCategory');

Route::post('/cart', 'Front@cart');

Route::get('/products', 'Front@products');

Route::get('/add', 'GoodsController@add');


Route::get('/', function () {
    return redirect('shop');
});

Route::get('/test', function () {
    return view('test');
});

Route::resource('shop', 'ProductController', ['only' => ['index', 'show']]);

Route::resource('cart', 'CartController');
Route::delete('emptyCart', 'CartController@emptyCart');

Route::get('cart_input', 'CartController@cart_input');

Route::get('/reduce/{rowId}', 'CartController@reduce');
Route::get('/increase/{rowId}', 'CartController@increase');
Route::get('/delete_item/{rowId}', 'CartController@delete_item');


Route::get('/send', function(){

  // 現状はわたすデータがないのでエンプティーアレイをわたします
  $data = [];
  Mail::send('test', $data, function($message){
    $message->to('cuongceopro@gmail.com')
            ->subject('ここがタイトルです');
  });

});

Route::get('/pay', 'PostsController@pay');
Route::get('/order', 'PostsController@order');
Route::get('/rental', 'PostsController@rental');
Route::get('/shoppingguide', 'PostsController@shoppingguide');
