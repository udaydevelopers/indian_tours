<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BlogController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\ReviewController as AdminReviewController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\DashboardController;
use Spatie\Sitemap\SitemapGenerator;

Route::get("generate-sitemap", function () {

    SitemapGenerator::create('https://www.indian-tours.in/')->writeToFile(public_path('../../sitemap.xml'));
    dd("done");
});
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
Route::get('clear-cache', function () {

    \Artisan::call('cache:clear');

    dd("Cache is cleared");

});



Auth::routes(['register' => false]);

// Redirect Root
Route::get('himachal-tours/triund-trek-dharamshala', function(){ 
    return Redirect::to('triund-trek/triund-trek-dharamshala', 301); 
});
Route::get('triund-trek/himachal-pradesh/triund-trek-dharamshala', function(){ 
    return Redirect::to('triund-trek/triund-trek-dharamshala', 301); 
});
Route::get('himachal-pradesh/triund-trek-dharamshala', function(){ 
    return Redirect::to('triund-trek/triund-trek-dharamshala', 301); 
});
Route::get('/triund', function(){ 
    return Redirect::to('triund-trek/triund-trek-dharamshala', 301); 
});
Route::get('/blog/index', function(){ 
    return Redirect::to('blog', 301); 
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/reload-captcha', [ContactController::class, 'reloadCaptcha']);
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'details'])->name('details');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-conditions', [HomeController::class, 'termsConditions'])->name('terms-conditions');

Route::name('admin.')->middleware(['role:Super Admin|Admin|Editor'])->prefix('admin')->group(function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('packages', PackageController::class);
    Route::resource('bookings', BookingController::class);
    Route::resource('settings', SettingController::class);
    Route::resource('contacts', AdminContactController::class);
    Route::resource('faqs', FaqController::class);
    Route::resource('reviews', AdminReviewController::class);
    Route::get('/reviews/approve/{id}', [AdminReviewController::class, 'approve'])->name('reviews.approve');
    
    Route::get('dashbard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('storeMedia', [PackageController::class, 'storeMedia'])->name('storeMedia');
    Route::post('/delete-image', [PackageController::class, 'deleteImage'])->name('images.destroy');
    Route::post('/contacts/delete-all', [AdminContactController::class, 'deleteAll'])->name('contacts.delete.all');
    // Routes for Blog Admin pages
    Route::resource('tags', TagController::class);
    Route::resource('posts', PostController::class);
});

/// Front End Root ///
//Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/popular-packages', [HomeController::class, 'popularPackages'])->name('popular-packages');
Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/{category}', [HomeController::class, 'categoryDetails'])->name('category-details');
Route::get('/tour-package/{package}', [HomeController::class, 'packageDetails'])->name('package-details');
Route::post('/booking', [HomeController::class, 'bookingStore'])->name('booking.store');
Route::post('/review', [ReviewController::class, 'store'])->name('review.store');