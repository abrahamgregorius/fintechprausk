<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);
Route::post('/', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);

// Shop
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/add', [ProductController::class, 'create']);
Route::post('/products/add', [ProductController::class, 'store']);
Route::get('/products/{id}', [ProductController::class, 'edit']);
Route::post('/products/{id}', [ProductController::class, 'update']);
Route::post('/products/{id}/delete', [ProductController::class, 'destroy']);

// Bank
Route::get('/topup', [BankController::class, 'topup_get']);
Route::post('/topup', [BankController::class, 'topup_post']);
Route::get('/topup/pending', [BankController::class, 'pending_get']);
Route::post('/topup/pending/{id}', [BankController::class, 'pending_post']);
Route::get('/transactions', [BankController::class, 'transactions']);
Route::get('/withdraw', [BankController::class, 'withdraw_get']);
Route::post('/withdraw', [BankController::class, 'withdraw_post']);

// Student
Route::get('/student/products', [StudentController::class, 'products']);
Route::post('/cart/{id}', [StudentController::class, 'addCart']);
Route::get('/student/topup', [StudentController::class, 'topup_get']);
Route::post('/student/topup', [StudentController::class, 'topup_post']);
Route::get('/student/cart', [StudentController::class, 'cart_get']);
Route::post('/student/cart', [StudentController::class, 'cart_post']);
Route::get('/student/transactions', [StudentController::class, 'transaction_get']);
