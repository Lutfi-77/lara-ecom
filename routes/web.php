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

// SELLER AUTH ROUTE
Route::get('/seller/login', 'seller\AuthSellerController@login')->name('seller.login');
Route::post('/seller/login', 'seller\AuthSellerController@authenticate')->name('seller.auth');
Route::get('/seller/register', 'seller\AuthSellerController@register')->name('seller.register');
Route::post('/seller/register', 'seller\AuthSellerController@sendRegister')->name('seller.sendRegister');

Route::middleware('auth')->group(function(){
    Route::get('/seller', 'seller\SellerController@dashboard')->name('seller.dashboard');
    Route::get('/seller/logout', 'seller\AuthSellerController@logout')->name('seller.logout');

    // PRODUCT SELLER CONTROLLER
    Route::get('seller/products', 'seller\ProductSellerController@index')->name('seller.products');

    // ADD PRODUCT
    Route::get('/seller/addproduct', 'seller\ProductSellerController@addProduct')->name('seller.addProduct');
    Route::post('/seller/addproduct', 'seller\ProductSellerController@storeProduct')->name('seller.storeProduct');
    Route::post('/seller/uploadimg', 'seller\ProductSellerController@storeImg')->name('seller.storeImg');
    // DELETE PRODUCT PASSING ID PRODUCT
    Route::get('/seller/delete/{id}', 'seller\ProductSellerController@deleteProduct')->name('seller.deleteProduct');
    // DETAIL PRODUCT PASSING ID PRODUCT
    Route::get('/seller/product/detail/{id}', 'seller\ProductSellerController@detailProduct')->name('seller.detailProduct');
    // ADD NEW IMAGE FOR PRODUCT PASSING ID PRODUCT
    Route::get('/seller/product/addimage/{id}', 'seller\ProductSellerController@addImageProduct')->name('seller.addImageProduct');

    // CATEGORY SELLER CONTROLLER
    Route::get('seller/category', 'seller\CategorySellerController@index')->name('seller.categories');
    Route::get('seller/addcategory', 'seller\CategorySellerController@addCategory')->name('seller.addCategory');
    
    Route::post('seller/addcategory', 'seller\CategorySellerController@store')->name('seller.storeCategory');
    Route::get('seller/delete/category/{id}', 'seller\CategorySellerController@delete')->name('seller.categoryDelete');
});

Route::get('/verifyseller/code/{code}', 'seller\AuthSellerController@verifcode')->name('seller.verifikasi');

// USER AUTH ROUTE
Route::get('/login', 'UserController@login')->name('user.login');
Route::post('/login', 'UserController@authenticate')->name('user.auth');
Route::get('/logout', 'UserController@logout')->name('user.logout');
Route::get('/register', 'UserController@register')->name('user.register');
Route::post('/register', 'UserController@storeRegister')->name('user.storeRegister');
Route::get('/otp/verif/{id}', 'UserController@inputOtp')->name('user.inputOTP');
Route::post('/otp/verif/{id}', 'UserController@verifOtp')->name('user.verifyOTP');

// PUBLIC ROUTE
Route::get('/', 'LandingController@Home')->name('home');
Route::get('/product', 'ProductController@index')->name('products');
Route::get('/product/detail/{id}', 'ProductController@detail')->name('detail');

Route::middleware('auth')->group(function() {
    Route::resource('/cart', 'ProductController@cart');
});
