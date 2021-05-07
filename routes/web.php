<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\Home;
use App\Http\Controllers\Places;
use App\Http\Controllers\People;

use App\Http\Controllers\AddTrip;

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


// M-V-C Architecture imports controllers from user.
Route::get('/', [Home::class, 'index']);
Route::get("users", [Users::class, 'getData']);
Route::get("users/{id}", [Users::class, 'getUserById']);

Route::get("people", [People::class, 'index']);
// Route::view("login", "login");

Route::get("places", [Places::class, 'index']);

//noaccess page
Route::view("noaccess", "noaccess");

//group middleware
/*
Route::group(['middleware' => ['protectedPage']], function(){
    Route::get('/', [Home::class, 'index']);
    Route::view("login", "login");
});
*/

Route::view('userprofile', 'userprofile');

Route::get("logout", [Users::class, 'logout']);

Route::get("login", [Users::class, 'getLogin']);
Route::post('login', [Users::class, 'postLogin']);


Route::get("flash", [AddTrip::class, 'getAddTrip']);
Route::post("flash", [AddTrip::class, 'postAddTrip']);
