<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorLibreria;
use App\Http\Controllers\controllerBook;
use App\Http\Controllers\controllerCustomer;




Route::get('/', function () {
    return view('main');
});
//Home Route
Route::get('main', [ControladorLibreria::class, 'GetMain'])->name('home');

//customer
//Create
Route::get('customer/create', [controllerCustomer::class,'create'])->name('customer.create');
//Store
Route::post('customer/store', [controllerCustomer::class,'store'])->name('customer.store');
//Index
Route::get('customer/index', [controllerCustomer::class,'index'])->name('customer.index');
//Edit
Route::get('customer/{id}/edit', [controllerCustomer::class,'edit'])->name('customer.edit');
//Update
Route::put('customer/{id}/update', [controllerCustomer::class,'update'])->name('customer.update');
//Show
Route::get('customer/{id}/show', [controllerCustomer::class,'show'])->name('customer.show');
//Destroy
Route::delete('customer/{id}/destroy', [controllerCustomer::class,'destroy'])->name('customer.destroy');

//Book
//Create
Route::get('book/create', [controllerBook::class,'create'])->name('book.create');
//Store
Route::post('book/store', [controllerBook::class,'store'])->name('book.store');
//Index
Route::get('book/index', [controllerBook::class,'index'])->name('book.index');
//Edit
Route::get('book/{id}/edit', [controllerBook::class,'edit'])->name('book.edit');
//Update
Route::put('book/{id}/update', [controllerBook::class,'update'])->name('book.update');
//Show
Route::get('book/{id}/show', [controllerBook::class,'show'])->name('book.show');
//Destroy
Route::delete('book/{id}/destroy', [controllerBook::class,'destroy'])->name('book.destroy');




Route::get('register', [ControladorLibreria::class, 'GetRegister'])->name('r');
Route::post('registerBookFilter', [ControladorLibreria::class, 'RegisterBookController']);
Route::get('customer', [ControladorLibreria::class, 'GetCustomer'])->name('cus');
Route::post('registerCustomerFilter', [ControladorLibreria::class, 'RegisterCustomerController']);
