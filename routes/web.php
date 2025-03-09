<?php

use App\Http\Controllers\AboutUs\AboutController;
use App\Http\Controllers\Catergories\CatergoriesController;
use App\Http\Controllers\ContactUs\ContactController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Projects\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'about'])->name('about');

Route::get('/catergories', [CatergoriesController::class, 'catergories'])->name('catergories');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/product/store', [ContactController::class, 'store'])->name('contact.store');


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/projects', [ProjectsController::class, 'projects'])->name('projects');


//PRODUCTS
Route::get('/product', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/product/create', [ProductController::class, 'store'])->name('products.store');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::patch('/product/{id}/update', [ProductController::class, 'update'])->name('products.update');
Route::get('/product/{id}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');
