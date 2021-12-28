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
// Route::view('/', 'app');

Route::get('/', [App\Http\Controllers\Front\FrontController::class, 'index'])->name('front.index');
Route::any('/hotel_list', [App\Http\Controllers\Front\FrontController::class, 'hotel_list'])->name('front.hotel_list');
Route::get('/hotel_details/{sessionId}/{productId}/{tokenId}/{hotelId}/{hotel_price}', [App\Http\Controllers\Front\FrontController::class, 'hotel_details'])->name('front.hotel_details');
Route::get('/restaurant', [App\Http\Controllers\Front\FrontController::class, 'restaurant'])->name('front.restaurant');
Route::any('/search', [App\Http\Controllers\Front\FrontController::class, 'search'])->name('front.search');

Route::get('/about_us', [App\Http\Controllers\Front\FrontController::class, 'about_us'])->name('front.about_us');
Route::get('/contact_us', [App\Http\Controllers\Front\FrontController::class, 'contact_us'])->name('front.contact_us');
Route::get('/help', [App\Http\Controllers\Front\FrontController::class, 'help'])->name('front.help');
Route::get('/faq', [App\Http\Controllers\Front\FrontController::class, 'faq'])->name('front.faq');
Route::get('/wishlist', [App\Http\Controllers\Front\FrontController::class, 'wishlist'])->name('front.wishlist');
Route::get('/view_cart', [App\Http\Controllers\Front\FrontController::class, 'view_cart'])->name('front.view_cart');
Route::get('/check_cart', [App\Http\Controllers\Front\FrontController::class, 'check_cart'])->name('front.check_cart');

Route::prefix('/user')->group(function () {
    Route::get('/login', [App\Http\Controllers\Front\UserController::class, 'login'])->name('front.user.login');
    Route::post('/login_submit', [App\Http\Controllers\Front\UserController::class, 'login_submit'])->name('front.user.login_submit');
    Route::get('/signup', [App\Http\Controllers\Front\UserController::class, 'signup'])->name('front.user.signup');
    Route::post('/signup_submit', [App\Http\Controllers\Front\UserController::class, 'signup_submit'])->name('front.user.signup_submit');
});

Route::prefix('/user')->middleware(['auth:web'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Front\UserController::class, 'dashboard'])->name('front.user.dashboard');
    Route::get('/room_booking', [App\Http\Controllers\Front\UserController::class, 'room_booking'])->name('front.user.room_booking');
    Route::get('/room_booking_details/{id}', [App\Http\Controllers\Front\UserController::class, 'room_booking_details'])->name('front.user.room_booking_details');
    Route::get('/edit_profile', [App\Http\Controllers\Front\UserController::class, 'edit_profile'])->name('front.user.edit_profile');
    Route::get('/update_profile', [App\Http\Controllers\Front\UserController::class, 'update_profile'])->name('front.user.update_profile');
    Route::get('/change_password', [App\Http\Controllers\Front\UserController::class, 'edit_profile'])->name('front.user.change_password');
});

Route::post('/test', [App\Http\Controllers\Front\FrontController::class, 'test'])->name('front.test');
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
