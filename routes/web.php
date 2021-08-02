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
    if(Gate::denies('logged_in'))
    {
        return view('auth.login');
    }
    return view('dashboard');
});

//Route::prefix('user')->middleware('auth')->name('user.')->group(function (){
//
//});



Route::prefix('user')->middleware('auth')->name('user.')->group(function (){
    Route::get('/update-password', [\App\Http\Controllers\User\ProfileController::class, 'updatePassword'])->name('password');
    Route::get('/profile', \App\Http\Controllers\User\ProfileController::class)->name('profile');
});

Route::middleware('auth')->group(function (){

    Route::resource('/customers', \App\Http\Controllers\CustomerController::class);
    Route::resource('/dashboard', \App\Http\Controllers\DashBoardController::class);
    Route::resource('/appointments', \App\Http\Controllers\AppointmentsController::class);
});




//Route::prefix('admin')->name('admin.')->group(function (){
//    Route::resource('/customers', \App\Http\Controllers\CustomerController::class);
//});
