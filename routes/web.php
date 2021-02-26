<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

// Route::get('/', 'UserController@index');
Route::get('/', 'ShopController@index')->name('index');

Route::post('users', 'UserController@store')->name('users.store');
Route::delete('users/{user}','UserController@destroy')->name('users.destroy');

Route::get('/shop', 'ShopController@shop')->name('shop');
Route::get('/shop/{product:slug}', 'ShopController@product')->name('product');

Route::get('/cart', function() {
    return view('cart');
})->name('cart');

Route::get('/checkout', function() {
    return view('checkout');
})->name('checkout');

Route::get('/blog-single', function() {
    return view('blog-single');
})->name('blog-single');

Route::get('blog', function() {
    return view('blog');
})->name('blog');

Route::get('404', function() {
    return view('404');
})->name('404');

Route::get('contact-us', function() {
    return view('contact-us');
})->name('contact-us');

Route::get('login', function() {
    return view('login');
})->name('login');


Route::get('product-details', function() {
    return view('product-details');
})->name('product-details');


Route::get('send-email', function() {
    return view('send-email');
})->name('send-email');

Route::resource('products','Backend\ProductController')
    ->middleware('auth')
    ->except('show'); // todos los metodos excepto show
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
