<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeConroller;
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

Route::get('/',[HomeConroller::class,'index'])->name('home.page');
Route::get('details-page{id}',[HomeConroller::class,'details'])->name('details.page');
Route::get('category',[CategoryController::class,'category'])->name('category.page');
Route::get('category-product-{id}',[CategoryController::class,'categoryProduct'])->name('categoryProduct');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [AdminController::class,'dashboard'])->name('dashboard.page');
    Route::get('/create-product', [ProductController::class,'create'])->name('create.product');
    Route::post('/add-product', [ProductController::class,'add'])->name('add.product');
    Route::get('/manage-product', [ProductController::class,'manage'])->name('manage.product');
    Route::get('/delete-product{id}', [ProductController::class,'delete'])->name('delete.product');
    Route::get('/edit-product{id}', [ProductController::class,'edit'])->name('edit.product');
    Route::post('/update-product', [ProductController::class,'update'])->name('update.product');
    Route::get('/create-slider', [ProductController::class,'slider'])->name('create.slider');
    Route::post('/add-slider', [ProductController::class,'addSlider'])->name('add.slider');
    Route::get('/manage-slider', [ProductController::class,'manageSlider'])->name('manage.slider');
    Route::get('/delete-slider{id}', [ProductController::class,'deleteSlider'])->name('delete.slider');
    Route::get('/edit-slider{id}', [ProductController::class,'editSlider'])->name('edit.slider');
    Route::post('/update-slider', [ProductController::class,'updateSlider'])->name('update.slider');
    Route::get('/create-category', [CategoryController::class,'create'])->name('create.category');
    Route::post('/add-category', [CategoryController::class,'store'])->name('add.category');

    
});
