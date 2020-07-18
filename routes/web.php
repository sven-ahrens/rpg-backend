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

/*
|--------------------------------------------------------------------------
| Default routes. No authentication needed
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    if (Auth::user()) {
        return view('forum');
    }

    return view('welcome');
});
Route::get('login', function () {
    return view('login');
});
Route::get('account/creation', function () {
    return view('account');
});
Route::post('login', 'LoginController')->name('login');
Route::post('account/creation', 'SignupController');

/*
|--------------------------------------------------------------------------
| User routes. Only accessible when logged in
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', function () {
        // TODO:: return profile view
    });
    Route::get('/notifications', function () {
        // TODO:: return profile view
    });
    Route::get('/messages', function () {
        // TODO:: return profile view
    });
    Route::get('/logout', 'LogoutController');
});
