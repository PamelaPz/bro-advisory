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

Route::get('/', 'App\Http\Controllers\LandingController@welcome')->name('welcome');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('dashboard');
Route::get('/register', 'App\Http\Controllers\Register@index')->name('register');
Route::get('/login', 'App\Http\Controllers\Register@login')->name('login');

