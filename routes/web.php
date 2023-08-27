<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
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
Route::get('/admin/home', function () {
    return view('admin.home');
});

Auth::routes();

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
 Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
//  Product Category
Route::get('/productcategory/index', [ProductCategoryController::class,'index'])->name('productcategory.index');
Route::get('/productcategory/create', [ProductCategoryController::class,'create'])->name('productcategory.create');
Route::post('/productcategory/create/store', [ProductCategoryController::class,'store'])->name('productcategory.store');
Route::get('/productcategory/edit/{id}', [ProductCategoryController::class,'edit'])->name('productcategory.edit');
Route::put('/productcategory/edit/update/{id}', [ProductCategoryController::class,'update'])->name('productcategory.update');
Route::get('/productcategory/show/{id}', [ProductCategoryController::class,'show'])->name('productcategory.show');
Route::delete('/productcategory/edit/delete/{id}', [ProductCategoryController::class,'destroy'])->name('productcategory.delete');

//  Product
Route::get('/product/index', [ProductController::class,'index'])->name('product.index');
Route::get('/product/create', [ProductController::class,'create'])->name('product.create');
Route::post('/product/create/store', [ProductController::class,'store'])->name('product.store');
Route::get('/product/edit/{id}', [ProductController::class,'edit'])->name('product.edit');
Route::put('/product/edit/update/{id}', [ProductController::class,'update'])->name('product.update');
Route::get('/product/show/{id}', [ProductController::class,'show'])->name('product.show');
Route::delete('/product/edit/delete/{id}', [ProductController::class,'destroy'])->name('product.delete');

//   Order
Route::get('/order/index', [OrderController::class,'index'])->name('order.index');
Route::get('/order/edit/{id}', [OrderController::class,'edit'])->name('order.edit');
Route::put('/order/edit/update/{id}', [OrderController::class,'update'])->name('order.update');
Route::get('/order/show/{id}', [OrderController::class,'show'])->name('order.show');
Route::delete('/order/edit/delete/{id}', [OrderController::class,'destroy'])->name('order.delete');

//   OrderItem
Route::get('/orderitem/index', [OrderItemController::class,'index'])->name('orderitem.index');
Route::get('/orderitem/create', [OrderItemController::class,'create'])->name('orderitem.create');
Route::post('/orderitem/create/store', [OrderItemController::class,'store'])->name('orderitem.store');
Route::get('/orderitem/edit/{id}', [OrderItemController::class,'edit'])->name('orderitem.edit');
Route::put('/orderitem/edit/update/{id}', [OrderItemController::class,'update'])->name('orderitem.update');
Route::get('/orderitem/show/{id}', [OrderItemController::class,'show'])->name('orderitem.show');
Route::delete('/orderitem/edit/delete/{id}', [OrderItemController::class,'destroy'])->name('orderitem.delete');



Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index'])->name('index');
Route::get('/contact', [App\Http\Controllers\Front\HomeController::class, 'contact'])->name('contact');
Route::get('/category', [App\Http\Controllers\Front\HomeController::class, 'category'])->name('category');
Route::get('/single', [App\Http\Controllers\Front\HomeController::class, 'single'])->name('single');
Route::get('/description/{id}', [App\Http\Controllers\Front\HomeController::class, 'description'])->name('description');
Route::get('/product', [App\Http\Controllers\Front\HomeController::class, 'productcart'])->name('productcart');
Route::post('/product/addcart/{id}', [App\Http\Controllers\Front\HomeController::class, 'productcartAdd'])->name('productcart.add');


Route::get('/redirect', [App\Http\Controllers\HomeController::class, 'redirect'])->name('home');