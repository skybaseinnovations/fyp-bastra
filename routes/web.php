<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Kernel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
//use App\Http\Controllers\UserRegisterController;
//use App\Http\Controllers\AdminController;
use App\Http\Controllers\FavouriteController;





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
 Route::post('/login/post', [LoginController::class, 'login'])->name('login.post');
 Route::post('/test', [HomeController::class, 'test'])->name('test');

// Frontend
Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index'])->name('index');

Route::prefix('user')->group(function(){

    Route::get('/register', [App\Http\Controllers\Front\HomeController::class, 'register'])->name('front.register');
    Route::get('/login', [App\Http\Controllers\Front\HomeController::class, 'login'])->name('login');
    
Route::middleware('auth')->group(function() {

Route::get('/contact', [App\Http\Controllers\Front\HomeController::class, 'contact'])->name('contact');
Route::get('/category/item/{id}', [App\Http\Controllers\Front\HomeController::class, 'categoryItem'])->name('category.item');
Route::get('/productshow/{id}', [App\Http\Controllers\Front\HomeController::class, 'productshow'])->name('productshow');
Route::get('/productdetails/{id}', [App\Http\Controllers\Front\HomeController::class,'details'])->name('details')->middleware('cartaccess');
Route::post('/product/addcart/{id}', [App\Http\Controllers\Front\HomeController::class, 'productcartAdd'])->name('productcart.add');
Route::get('/cartshow',[App\Http\Controllers\Front\HomeController::class, 'cartshow'])->name('cartshow')->middleware('cartaccess');
Route::get('/order-history',[App\Http\Controllers\Front\HomeController::class, 'orderhistory'])->name('order-history');
Route::get('/cancel/product/{id}',[App\Http\Controllers\Front\HomeController::class,'cancelProduct'])->name('cancel.product');
Route::get('/cartItem/delete/{id}',[App\Http\Controllers\Front\HomeController::class, 'deleteCartItem'])->name('cartItem.delete')->middleware('cartaccess');
Route::resource('/orders',App\Http\Controllers\Front\OrderController::class);

//favorites
Route::get('/fav', [\App\Http\Controllers\FavoriteController::class, 'favourite'])->name('favourite');
Route::get('/favorite/store',[App\Http\Controllers\FavoriteController::class, 'store'])->name('favorite.store');
Route::post('/checkout/payment',[App\Http\Controllers\Front\OrderController::class, 'checkout'])->name('checkout');


//order
Route::delete('/orderitem/edit/delete/{id}', [OrderItemController::class, 'destroy'])->name('orderitem.delete');//  Product Category

});

});

// Route::delete('/orderitem/edit/delete/{id}', [OrderItemController::class, 'destroy'])->name('orderitem.delete');//  Product Category


// Backend

Route::get('/success-message',[App\Http\Controllers\Front\HomeController::class, 'getSuccess'])->name('success.message');
Route::get('/failure-message',[App\Http\Controllers\Front\HomeController::class, 'getFailure'])->name('failure.message');
Route::get('/order-confirmation',[App\Http\Controllers\Front\HomeController::class, 'orderConfirm'])->name('order-confirm');
Route::get('/mark-as-read', [App\Http\Controllers\Front\HomeController::class, 'markNotification'])->name('markNotification');


Route::prefix('admin')->middleware('auth:admin')->group(function() {
    //  Product Category
    Route::get('/productcategory/index', [ProductCategoryController::class, 'index'])->name('productcategory.index');
    Route::get('/productcategory/create', [ProductCategoryController::class, 'create'])->name('productcategory.create');
    Route::post('/productcategory/create/store', [ProductCategoryController::class, 'store'])->name('productcategory.store');
    Route::get('/productcategory/edit/{id}', [ProductCategoryController::class, 'edit'])->name('productcategory.edit');
    Route::put('/productcategory/edit/update/{id}', [ProductCategoryController::class, 'update'])->name('productcategory.update');
    Route::get('/productcategory/show/{id}', [ProductCategoryController::class, 'show'])->name('productcategory.show');
    Route::delete('/productcategory/edit/delete/{id}', [ProductCategoryController::class, 'destroy'])->name('productcategory.delete');

    //  Product
    Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/create/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/edit/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/show/{id}', [ProductController::class, 'show'])->name('product.show');
    Route::delete('/product/edit/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');

    //   Order
    Route::get('/order/index', [OrderController::class, 'index'])->name('order.index');
    Route::get('/order/edit/{id}', [OrderController::class, 'edit'])->name('order.edit');
    Route::put('/order/edit/update/{id}', [OrderController::class, 'update'])->name('order.update');
    Route::get('/order/show/{id}', [OrderController::class, 'show'])->name('order.show');
    Route::delete('/order/edit/delete/{id}', [OrderController::class, 'destroy'])->name('order.delete');

    //   OrderItem
    Route::get('/orderitem/index', [OrderItemController::class, 'index'])->name('orderitem.index');
    Route::get('/orderitem/create', [OrderItemController::class, 'create'])->name('orderitem.create');
    Route::post('/orderitem/create/store', [OrderItemController::class, 'store'])->name('orderitem.store');
    Route::get('/orderitem/edit/{id}', [OrderItemController::class, 'edit'])->name('orderitem.edit');
    Route::put('/orderitem/edit/update/{id}', [OrderItemController::class, 'update'])->name('orderitem.update');
    Route::get('/orderitem/show/{id}', [OrderItemController::class, 'show'])->name('orderitem.show');
    Route::delete('/orderitem/edit/delete/{id}', [OrderItemController::class, 'destroy'])->name('orderitem.delete');//  Product Category
    Route::get('/productcategory/index', [ProductCategoryController::class, 'index'])->name('productcategory.index');
    Route::get('/productcategory/create', [ProductCategoryController::class, 'create'])->name('productcategory.create');
    Route::post('/productcategory/create/store', [ProductCategoryController::class, 'store'])->name('productcategory.store');
    Route::get('/productcategory/edit/{id}', [ProductCategoryController::class, 'edit'])->name('productcategory.edit');
    Route::put('/productcategory/edit/update/{id}', [ProductCategoryController::class, 'update'])->name('productcategory.update');
    Route::get('/productcategory/show/{id}', [ProductCategoryController::class, 'show'])->name('productcategory.show');
    Route::delete('/productcategory/edit/delete/{id}', [ProductCategoryController::class, 'destroy'])->name('productcategory.delete');

    //  Product
    Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/create/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/edit/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/show/{id}', [ProductController::class, 'show'])->name('product.show');
    Route::delete('/product/edit/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');

    //   Order
    Route::get('/order/index', [OrderController::class, 'index'])->name('order.index');
    Route::get('/order/edit/{id}', [OrderController::class, 'edit'])->name('order.edit');
    Route::put('/order/edit/update/{id}', [OrderController::class, 'update'])->name('order.update');
    Route::get('/order/show/{id}', [OrderController::class, 'show'])->name('order.show');
    Route::delete('/order/edit/delete/{id}', [OrderController::class, 'destroy'])->name('order.delete');

    //   OrderItem
    Route::get('/orderitem/index', [OrderItemController::class, 'index'])->name('orderitem.index');
    Route::get('/orderitem/create', [OrderItemController::class, 'create'])->name('orderitem.create');
    Route::post('/orderitem/create/store', [OrderItemController::class, 'store'])->name('orderitem.store');
    Route::get('/orderitem/edit/{id}', [OrderItemController::class, 'edit'])->name('orderitem.edit');
    Route::put('/orderitem/edit/update/{id}', [OrderItemController::class, 'update'])->name('orderitem.update');
    Route::get('/orderitem/show/{id}', [OrderItemController::class, 'show'])->name('orderitem.show');
    Route::delete('/orderitem/edit/delete/{id}', [OrderItemController::class, 'destroy'])->name('orderitem.delete');


    //Notification

#Display all notifications to Admin

//    Route::get('/notification', [App\Http\Controllers\Front\HomeController::class,'showNotificaton']);

#Notification mark as Read

});


