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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'FrontController@index')->name('home');
Route::get('/shirts', 'FrontController@shirts')->name('shirts');
Route::get('/shirt/{id}', 'FrontController@shirt')->name('shirt');
Route::resource('/cart', 'CartController');
Route::resource('/address', 'AddressController');

Route::group(['middleware'=>'auth'],function(){
  Route::get('/checkout', 'CheckoutController@step1')->name('checkout');
  Route::get('/payment','CheckoutController@payment')->name('payment');
  Route::post('/store-payment','CheckoutController@storePayment')->name('payment.store');
});


Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){
  Route::get('/', function()
  {
    return view('admin.index');
  })->name('admin.index');
  Route::resource('product','ProductsController');
  Route::resource('category','CategoryController');
  Route::get('order/{type?}','OrderController@orders')->name('order.view');
  Route::post('order/{orderId}', 'OrderController@delivered')->name('toggle.delivered');
});
