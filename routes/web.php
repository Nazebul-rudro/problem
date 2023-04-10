<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


// category


Route::controller(CategoryController::class)->group(function () {
    Route::get('category', 'index')->name('categories.list');
    Route::get('category/create', 'create')->name('categories.create');
    Route::post('category', 'store')->name('categories.store');
    Route::get('category/edit/{category}', 'edit')->name('categories.edit');
    Route::patch('category/edit/{category}', 'update')->name('categories.update');
    Route::delete('category/{category}', 'destroy')->name('categories.destroy');
    
    
    
});


Route::controller(BrandController::class)->group(function () {
    Route::get('brand', 'index')->name('brands.list');
    Route::post('brand', 'store')->name('brands.store');
    Route::patch('brand/edit/{brand}', 'update')->name('brands.update');
    Route::delete('brand/destroy/{brand}', 'destroy')->name('brands.destroy');
    

});

Route::controller(ProductController::class)->group(function(){

Route::get('product', 'index')->name('products.list');
Route::post('product', 'store')->name('products.store');


});




});


