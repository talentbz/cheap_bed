<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\Front\FrontController::class, 'index'])->name('front.index');
Route::any('/hotel_list', [App\Http\Controllers\Front\FrontController::class, 'hotel_list'])->name('front.hotel_list');
Route::get('/hotel_details/{id}', [App\Http\Controllers\Front\FrontController::class, 'hotel_details'])->name('front.hotel_details');
Route::get('/restaurant', [App\Http\Controllers\Front\FrontController::class, 'restaurant'])->name('front.restaurant');

Route::get('/about_us', [App\Http\Controllers\Front\FrontController::class, 'about_us'])->name('front.about_us');
Route::get('/contact_us', [App\Http\Controllers\Front\FrontController::class, 'contact_us'])->name('front.contact_us');
Route::get('/help', [App\Http\Controllers\Front\FrontController::class, 'help'])->name('front.help');
Route::get('/faq', [App\Http\Controllers\Front\FrontController::class, 'faq'])->name('front.faq');
Route::get('/wishlist', [App\Http\Controllers\Front\FrontController::class, 'wishlist'])->name('front.wishlist');
Route::get('/view_cart', [App\Http\Controllers\Front\FrontController::class, 'view_cart'])->name('front.view_cart');
Route::get('/check_cart', [App\Http\Controllers\Front\FrontController::class, 'check_cart'])->name('front.check_cart');

Route::get('/test', [App\Http\Controllers\Front\FrontController::class, 'test']);

//admin dashboard
Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'admin'], function(){
        Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
    });
});

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);
