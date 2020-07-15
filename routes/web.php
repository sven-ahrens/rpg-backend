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

Route::get('/', function () {
    if (Auth::user()) {
        return view('forum');
    }

    return view('welcome');
});

Route::get('login', function () {
    return view('login');
});
Route::post('login', 'LoginController')->name('login');

Route::get('account/creation', function () {
    return view('account');
});
Route::post('account/creation', 'SignupController');
