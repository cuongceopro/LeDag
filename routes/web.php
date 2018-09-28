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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PostsController@ledaq');
//Route::get('/', 'HomeController@ledaq');

Route::get('/company', 'PostsController@company');

Route::get('/shopping', 'PostsController@shopping');

Route::get('/collection', 'PostsController@collection');

Route::get('/eventnews', 'PostsController@eventnews');

Route::get('/contact', 'PostsController@contact');

Route::get('/detail/{id?}', 'PostsController@detail');

Route::get('/good/{id?}', 'GoodsController@good');

//Route::get('/cart/{id?}', 'GoodsController@cart');

Route::get('/create', 'PostsController@create');

Route::post('/event_store', 'PostsController@store');

Route::post('/inquiry_store', 'InquirysController@store');
Route::get('/contact_done', 'InquirysController@contact_done');

Route::get('/category/{id?}', 'GoodsController@showCategory');

Route::post('/cart', 'Front@cart');

Route::get('/products', 'Front@products');

Route::get('/add', 'GoodsController@add');


// Route::get('/', function () {
//     return redirect('shop');
// });

Route::get('/test', function () {
    return view('test');
});

Route::resource('shop', 'ProductController', ['only' => ['index', 'show']]);

Route::resource('cart', 'CartController');
Route::delete('emptyCart', 'CartController@emptyCart');

Route::get('cart_input', 'CartController@cart_input');
Route::post('/store_database', 'InquirysController@store_database');
Route::get('cart_done', 'CartController@cart_done');

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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/manage/inquiry/{status?}', 'HomeController@inquiry');
Route::get('/manage/inquiry_detail/{id?}', 'HomeController@inquiry_detail');
Route::get('/manage/inquiry_done/{id?}', 'HomeController@inquiry_done');
Route::get('/manage/inquiry_todo/{id?}', 'HomeController@inquiry_todo');

Route::get('/manage/order/{status?}', 'HomeController@order');
Route::get('/manage/order_detail/{id?}', 'HomeController@order_detail');
Route::get('/manage/order_done/{id?}', 'HomeController@order_done');
Route::get('/manage/order_todo/{id?}', 'HomeController@order_todo');

Route::get('/manage/creat_event', 'HomeController@create_event');
Route::post('/manage/event_store', 'PostsController@event_store');

Route::get('/manage', 'HomeController@manage');

use App\Post;
 Route::get('welcome/{locale}', function ($locale) {
    App::setLocale('jp');
    echo App::getLocale();
    echo Config::get('app.locale');
    Session::put('applocale','jp');
    $locale = App::getLocale();
    $posts = Post::all();
    return View::make('ledaq')->with(['posts' => $posts, 'locale' => $locale]);
    // return Redirect::back();
});
 Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

