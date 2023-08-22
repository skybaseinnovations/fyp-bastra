<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;




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
Route::get('/product/index', [ProductController::class,'index'])->name('product.index');
Route::get('/product/create', [ProductController::class,'create'])->name('product.create');
Route::post('/product/create/store', [ProductController::class,'store'])->name('product.create.store');
Route::get('/product/edit/{id}', [ProductController::class,'edit'])->name('product.edit');
Route::put('/product/edit/update/{id}', [ProductController::class,'update'])->name('product.edit.update');
Route::delete('/product/edit/delete/{id}', [ProductController::class,'destroy'])->name('product.edit.delete');


Route::get('/product/show', [ProductController::class,'show'])->name('product.show');
Auth::routes();

Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index'])->name('index');
Route::get('/contact', [App\Http\Controllers\Front\HomeController::class, 'contact'])->name('contact');
Route::get('/category', [App\Http\Controllers\Front\HomeController::class, 'category'])->name('category');
Route::get('/single', [App\Http\Controllers\Front\HomeController::class, 'single'])->name('single');
Route::get('/description', [App\Http\Controllers\Front\HomeController::class, 'description'])->name('description');

// Route::get('/front', [HomeController::class, 'index']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/ind', function () {
//     return view('ind');
// });
Route::get('/redirect', [App\Http\Controllers\HomeController::class, 'redirect'])->name('home');
