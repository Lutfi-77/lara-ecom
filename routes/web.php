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
Route::get('/seller/login', 'SellerController@login')->name('seller.login');
Route::post('/seller/login', 'SellerController@authenticate')->name('seller.auth');
Route::get('/seller/register', 'SellerController@register')->name('seller.register');
Route::post('/seller/register', 'SellerController@sendRegister')->name('seller.sendRegister');

Route::middleware('auth')->group(function(){
    Route::get('/seller', 'SellerController@dashboard')->name('seller.dashboard');
    Route::get('/seller/addproduct', 'SellerController@addProduct')->name('seller.addProduct');
    Route::post('/seller/addproduct', 'SellerController@storeProduct')->name('seller.storeProduct');
    Route::post('/seller/uploadimg', 'SellerController@storeImg')->name('seller.storeImg');
    Route::get('/seller/logout', 'SellerController@logout')->name('seller.logout');
});

Route::get('/verifyseller/code/{code}', 'SellerController@verifcode')->name('seller.verifikasi');

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
