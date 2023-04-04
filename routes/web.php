<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('admin.dashboard');
});
Route::middleware(['auth:web'])->group(function () {
    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/product', [ProductController::class, 'index']);
    Route::get('/tambah_kategori', [CategoryController::class, 'create']);
    Route::get('/update/{id}', [CategoryController::class, 'edit']);
    Route::get('/update/{id}', [ProductController::class, 'edit']);
    Route::get('/tambah_produk', [ProductController::class, 'create']);

    Route::post('/kategoriku', [CategoryController::class, 'store']);
    Route::put('/kategoriku/{id}', [CategoryController::class, 'update']);
    Route::put('/produkku/{id}', [ProductController::class, 'update']);
    Route::post('/produkku', [ProductController::class, 'store']);
    Route::delete('/kategori/{id}', [CategoryController::class, 'destroy']);
    Route::delete('/produk/{id}', [ProductController::class, 'destroy']);
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



Route::post('/register', [AuthController::class, 'doRegister'])->name('do.register');
Route::post('/login', [AuthController::class, 'doLogin'])->name('do.login');

