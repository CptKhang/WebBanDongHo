<?php

use App\Http\Controllers\ProfileController;
use App\Models\Categories;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('user.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/categories',[CategoriesController::class,'index']);

Route::get('/admin/create-categories',[CategoriesController::class,'create']);

Route::post('/admin/categories',[CategoriesController::class,'store']);

Route::get('/admin/edit-categories={id}',[CategoriesController::class,'edit']);

Route::put('/admin/update-categories={id}',[CategoriesController::class,'update']);

Route::delete('/admin/delete-categories={id}', [CategoriesController::class,'destroy']);

//-----------

Route::get('/admin/products',[ProductsController::class,'index']);

Route::get('/admin/create-products',[ProductsController::class,'create']);

Route::post('/admin/products',[ProductsController::class,'store']);

Route::get('/admin/edit-products={id}',[ProductsController::class,'edit']);

Route::put('/admin/update-products={id}',[ProductsController::class,'update']);

Route::delete('/admin/delete-products={id}', [ProductsController::class,'destroy']);

Route::get('/admin/show-products={id}',[ProductsController::class,'show']);
