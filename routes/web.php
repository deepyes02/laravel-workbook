<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
use Illuminate\Http\Request;
use App\Http\Controllers\TripController;
//homepage
Route::get('/', function(){
    return view('home');
});

Route::get('/add-trips', function () {
    return view('add-trips');
});

Route::post('/add-trips', [TripController::class,'getData']);

//list all trips
Route::get('trips', function(){
    $trips = DB::select('select * from trips where 1 = ?', [1]);
    return view('list-trips', ['trips' => $trips]);
});
