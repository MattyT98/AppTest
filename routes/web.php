<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('home');
});

Route::get('/createNewCustomer', function () {
    return view('/createNewCustomer');
});
Route::post('createNewCustomer', [CustomerController::class, 'insert']);

Route::get('/viewCustomers', [CustomerController::class, 'ShowCustomers']);

Route::get('/editCustomer/{id}', [CustomerController::class, 'EditCustomer']);
Route::post('/editCustomer/{id}', [CustomerController::class, 'UpdateCustomer']);

Route::get('/deleteCustomer/{id}', [CustomerController::class, 'DeleteCustomer']);




