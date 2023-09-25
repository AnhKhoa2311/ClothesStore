<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('/', 'App\Http\Controllers\HomeController@index2') -> name("home.index2");


Route::middleware('auth')->group(function() {
    Route::get('/home', 'App\Http\Controllers\HomeController@index')->name("home.index");
    Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");

    Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
    Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");

    Route::get('/cart', 'App\Http\Controllers\CartController@index')->name("cart.index");
    Route::get('/cart/delete', 'App\Http\Controllers\CartController@delete')->name("cart.delete");
    Route::post('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name("cart.add");
    Route::get('/cart/purchase','App\Http\Controllers\CartController@purchase')->name('cart.purchase');
    Route::get('/my-account/orders', 'App\Http\Controllers\MyAccountController@orders')->name('myaccount.orders');

    Route::get('/userinformation', 'App\Http\Controllers\UserInformationController@index') -> name('user.userinfo');
    Route::post('/userinformation/create', 'App\Http\Controllers\UserInformationController@store') -> name("user.userinfo.create");
    Route::get('/userinformation/personalinfor', 'App\Http\Controllers\UserInformationController@showInfo') -> name("user.userinfo.personal");
    Route::get('/userinformation/edit/{id}', 'App\Http\Controllers\UserInformationController@edit') -> name("user.userinfo.edit");
    Route::post('/userinformation/update/{id}', 'App\Http\Controllers\UserInformationController@update') -> name("user.userinfo.update");
});

Route::middleware('admin')->group(function() {
    Route::get('/admin', 'App\Http\Controllers\AdminHomeController@index')->name("admin.home.index");
    Route::get('/admin/products','App\Http\Controllers\Admin\AdminProductController@index')->name("admin.product.index");
    Route::get("/admin/create", "App\Http\Controllers\Admin\AdminProductController@create") -> name("admin.product.create");
    Route::post('/admin/products/store','App\Http\Controllers\Admin\AdminProductController@store')->name("admin.product.store");
    Route::delete('/admin/products/{id}/delete', 'App\Http\Controllers\Admin\AdminProductController@delete')->name("admin.product.delete");
    Route::get('/admin/products/{id}/edit', 'App\Http\Controllers\Admin\AdminProductController@edit')->name("admin.product.edit");
    Route::put('/admin/products/{id}/update', 'App\Http\Controllers\Admin\AdminProductController@update')->name("admin.product.update");

    Route::get('/admin/admins', 'App\Http\Controllers\Admin\AdminInformationController@index') -> name("admin.admins.index");
    Route::get('/admin/admins/create', 'App\Http\Controllers\Admin\AdminInformationController@create') -> name("admin.admins.create");
    Route::post('/admin/admins/store', 'App\Http\Controllers\Admin\AdminInformationController@store') -> name("admin.admins.store");
    Route::get('/admin/admin/edit/{id}', 'App\Http\Controllers\Admin\AdminInformationController@edit') -> name("admin.admin.edit");
    Route::post('/admin/admin/update/{id}', 'App\Http\Controllers\Admin\AdminInformationController@update') -> name("admin.admin.update");
    Route::get('/admin/admin/delete/{id}', 'App\Http\Controllers\Admin\AdminInformationController@delete') -> name("admin.admin.delete");

    Route::get("/admin/users", 'App\Http\Controllers\Admin\UserAccountController@index') -> name("admin.users.index");
    Route::get("/admin/user/delete/{id}", 'App\Http\Controllers\Admin\UserAccountController@delete') -> name("admin.user.delete");
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
