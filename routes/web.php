<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StockInController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('/dashboard/authors', AuthorController::class)->middleware('auth');
Route::resource('/dashboard/publishers', PublisherController::class)->middleware('auth');
Route::resource('/dashboard/books', BookController::class)->middleware('auth');
Route::resource('/dashboard/categories', CategoryController::class)->middleware('auth');
Route::resource('/dashboard/orders', OrderController::class)->middleware('auth');
Route::resource('/dashboard/order_items', OrderItemController::class)->middleware('auth');
Route::resource('/dashboard/stockin', StockInController::class)->middleware('auth');
