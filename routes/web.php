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

Route::get('/', function () {
    return view('index');
});

Route::resource('/customers', \App\Http\Controllers\CustomerController::class);

Route::resource('/dashboard', \App\Http\Controllers\DashBoardController::class);



// Admin routes
//Route::prefix('admin')->name('admin.')->group(function (){
//    Route::resource('/customers', \App\Http\Controllers\CustomerController::class);
//});
