<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('adminpage', [ProductController::class, 'show'])->middleware(['auth'])->name('adminpage');
Route::get('adminOrders', [ProductController::class, 'showAllOrders'])->middleware(['auth'])->name('adminOrders');
Route::get('dashboard', [ProductController::class, 'showToCustomer'])->middleware(['auth'])->name('dashboard');
Route::get('delete/{id}', [ProductController::class, 'delete'])->middleware(['auth'])->name('adminpage');
Route::get('deleteOrder/{id}', [ProductController::class, 'deleteOrder'])->middleware(['auth'])->name('adminOrders');
Route::get('edit/{id}', [ProductController::class, 'showEditing'])->middleware(['auth'])->name('edit');
Route::post('edit', [ProductController::class, 'edit'])->middleware(['auth'])->name('adminpage');
Route::get('order/{id}', [ProductController::class, 'showOrder'])->middleware(['auth'])->name('order');
Route::post('order', [ProductController::class, 'order'])->middleware(['auth'])->name('order');

Route::get('/', [ProductController::class, 'showGuest']);



Route::get('insert', [AddProductController::class, 'insertform']);
Route::post('create', [AddProductController::class, 'insert']);

Route::get('/add', function () {
    return view('add');
})->middleware(['auth'])->name('add');

require __DIR__ . '/auth.php';
