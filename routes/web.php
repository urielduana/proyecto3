<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorLibreria;



Route::get('/', function () {
    return view('main');
});

Route::get('main', [ControladorLibreria::class, 'GetMain']);
Route::get('register', [ControladorLibreria::class, 'GetRegister'])->name('r');
Route::post('registerBookFilter', [ControladorLibreria::class, 'RegisterBookController']);
