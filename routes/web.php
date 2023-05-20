<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('admin', function() {
//     return view('layouts.admin');
// });

// Route::get('admin/products/create', function() {
//     return view('admin.products.create');
// });

// Route::get('admin/products/index', function() {
//     return view('admin.products.index');
// });


route::get('products',[ProductController::class,'index']);
route::get('products/create',[ProductController::class,'create']);
route::post('products/store',[ProductController::class,'store']);
route::get('products/edit/{id}',[ProductController::class,'edit']);
route::get('products/delete/{id}',[ProductController::class,'destroy']);
route::patch('products/update/{id}',[ProductController::class,'update']);




route::get('categories',[CategoryController::class,'index']);
route::get('categories/create',[CategoryController::class,'create']);
route::post('categories/store',[CategoryController::class,'store']);
route::get('categories/edit/{id}',[CategoryController::class,'edit']);
route::get('categories/delete/{id}',[CategoryController::class,'destroy']);
route::patch('categories/update/{id}',[CategoryController::class,'update']);