<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

    Route::resource('books', App\Http\Controllers\BookController::class);
});

require __DIR__.'/auth.php';
