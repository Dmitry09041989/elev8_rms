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

Route::get('/articles-api', function (){
    return \App\Models\Article::all();
});

Route::get('/sections-api', function (){
    return \App\Models\Section::all();
});

Route::prefix('user')->middleware('auth')->name('user.')->group(function (){
    Route::get('/update-password', [\App\Http\Controllers\User\ProfileController::class, 'updatePassword'])
        ->name('password');
    Route::get('/profile', \App\Http\Controllers\User\ProfileController::class)->name('profile');
});

Route::middleware('auth')->group(function (){

    Route::get('/customers/{id}/message', [\App\Http\Controllers\CustomerController::class, 'message'])->name('customers.message');
    Route::post('/storeCustomerMessage', [\App\Http\Controllers\CustomerController::class, 'storeCustomerMessage'])->name('customers.storeCustomerMessage');
    Route::resource('/customers', \App\Http\Controllers\CustomerController::class);

    Route::resource('/dashboard', \App\Http\Controllers\DashBoardController::class);
    Route::resource('/appointments', \App\Http\Controllers\AppointmentsController::class);
    Route::resource('/trainings', \App\Http\Controllers\TrainingController::class);
    Route::resource('/website/sections', \App\Http\Controllers\SectionController::class);
    Route::resource('/website/articles', \App\Http\Controllers\ArticleController::class);
    Route::resource('/messages', \App\Http\Controllers\MessageController::class);
});


