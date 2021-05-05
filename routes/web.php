<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\Home;
use App\Http\Controllers\Places;

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

// Route::view is a shortcut but it doesn't do much except display static page
// Route::view("/", "hello");
Route::get('/', [Home::class, 'index']);

// M-V-C Architecture imports controlelr from user.
Route::get("users", [Users::class, 'index']);
Route::view("login", "login");
Route::post('login', [Users::class, 'login']);
Route::get("users/{id}", [Users::class, 'getUserById']);

Route::get("places", [Places::class, 'index']);
