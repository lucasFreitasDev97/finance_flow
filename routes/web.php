<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Categories Routes
Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/form/{id?}', [\App\Http\Controllers\CategoryController::class, 'form'])->name('categories.form');
Route::post('/categories/form/store', [\App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
Route::post('/categories/update/{id}', [\App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');
Route::get('/categories/destroy/{id}', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.destroy');


