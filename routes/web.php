<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('transactions', TransactionController::class)->middleware('auth');
Route::post('/create-transaction', [TransactionController::class, 'create'])->name('transaction.create');
