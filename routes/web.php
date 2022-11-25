<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorLibreria;



Route::get('/', function () {
    return view('main');
});
//Home Route
Route::get('main', [ControladorLibreria::class, 'GetMain'])->name('home');











Route::get('register', [ControladorLibreria::class, 'GetRegister'])->name('r');
Route::post('registerBookFilter', [ControladorLibreria::class, 'RegisterBookController']);
Route::get('customer', [ControladorLibreria::class, 'GetCustomer'])->name('cus');
Route::post('registerCustomerFilter', [ControladorLibreria::class, 'RegisterCustomerController']);
