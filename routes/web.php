<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::resource('category', CategoryController::class);

Route::resource('item', ItemController::class);
Route::post('item/import', [ItemController::class, 'import'])->name('item.import');
Route::post('item/export', [ItemController::class, 'export'])->name('item.export');

Route::resource('transaction', TransactionController::class);
