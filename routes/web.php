<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PackageController;

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


Route::get('/', [HomeController::class, 'index']);


Auth::routes(['register' => false]);




Route::name('admin.')->middleware(['role:Super Admin|Admin|Editor'])->prefix('admin')->group(function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('packages', PackageController::class);
    
    Route::get('dashbard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::post('storeMedia', [PackageController::class, 'storeMedia'])->name('storeMedia');
});

/// Front End Root ///
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/popular-packages', [HomeController::class, 'popularPackages'])->name('popular-packages');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/{category}', [HomeController::class, 'categoryDetails'])->name('category-details');
Route::get('/{category}/{package}', [HomeController::class, 'packageDetails'])->name('package-details');

Route::post('/booking', [HomeController::class, 'bookingStore'])->name('booking.store');
