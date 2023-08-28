<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontendController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function () {
    // user route
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    // admin route

    Route::get('/category', [CategoryController::class, 'index']);
    Route::post('/save-category', [CategoryController::class, 'store']);
    Route::get('/edit-category/{id}', [CategoryController::class, 'edit']);
    Route::post('/update-category/{id}',[CategoryController::class,'update']);
    Route::get('/delete-category/{id}', [CategoryController::class, 'destroy']);

    Route::get('/products',[ProductController::class,'index']);
    Route::post('/save-product', [ProductController::class, 'store']);
    Route::get('/edit-product/{id}', [ProductController::class, 'edit']);
    Route::post('/update-product/{id}',[ProductController::class,'update']);
    Route::get('/delete-product/{id}', [ProductController::class, 'destroy']);
});
