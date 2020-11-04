<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;


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
//Auth

Route::get('/admin/index', [HomeController::class, 'index'])->name('adminindex');
Route::get('/admin/login', [HomeController::class, 'login'])->name('adminlogin');


//product_route
Route::get('home', [ProductController::class, 'index'])->name('home');
Route::get('contact', [ProductController::class, 'contact'])->name('contact');
Route::get('product', [ProductController::class, 'product'])->name('product');
Route::get('about', [ProductController::class, 'company'])->name('company');

//admin
Route::post('/admin/index', [AdminController::class, 'admin'])->name('indexadmin');



Route::get('/', function () {
    return view('welcome');
});





Auth::routes();

