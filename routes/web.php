<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('products', ProductController::class);

Route::get('/produk', [ProductController::class, 'index'])->name('produk.index');
Route::get('/produk/{id}/edit', [ProductController::class, 'edit'])->name('produk.edit');
Route::delete('/produk/{id}', [ProductController::class, 'destroy'])->name('produk.destroy');


Route::get('/produk/create', [ProductController::class, 'create'])->name('produk.create');
Route::post('/produk', [ProductController::class, 'store'])->name('produk.store');
Route::put('/produk/{id}', [ProductController::class, 'update'])->name('produk.update');
