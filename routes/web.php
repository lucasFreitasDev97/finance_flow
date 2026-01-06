<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\CategoryController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('expenses', ExpenseController::class)->only([
    'index', 'create', 'store'
]);

Route::resource('incomes', IncomeController::class)->only([
    'create', 'store'
]);

Route::resource('categories', CategoryController::class)
    ->only(['index', 'create', 'store']);


