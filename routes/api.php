<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Transações
Route::get('/transactions', [TransactionController::class, 'index']);
Route::get('/transactions/{transactionId}', [TransactionController::class, 'index']);
Route::post('/transactions', [TransactionController::class, 'store']);

// Categorias
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{categoryId}', [CategoryController::class, 'show']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::put('/categories/{categoryId}', [CategoryController::class, 'update']);
Route::delete('/categories/{categoryId}', [CategoryController::class, 'destroy']);

Route::get('/test_complex', [TransactionController::class, 'test_complex']);
