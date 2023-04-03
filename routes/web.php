<?php

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

Auth::routes(['register' => false]);

Route::group(['middleware' => ['is_admin','auth'], 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    // pesanan
    Route::resource('pesanan', \App\Http\Controllers\Admin\PemesananController::class)->only(['index', 'destroy']);
    // banda sites
    Route::resource('banda_sites', \App\Http\Controllers\Admin\BandaSiteController::class)->except('show');
    Route::resource('banda_sites.galleries', \App\Http\Controllers\Admin\GalleryController::class)->except(['create', 'index','show']);
    // categories
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class)->except('show');
    // blogs
    Route::resource('blogs', \App\Http\Controllers\Admin\BlogController::class)->except('show');
    // profile
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
// banda sites
Route::get('banda-sites',[\App\Http\Controllers\BandaSiteController::class, 'index'])->name('banda_site.index');
Route::get('banda-sites/{banda_site:slug}',[\App\Http\Controllers\BandaSiteController::class, 'show'])->name('banda_site.show');
// blogs
Route::get('blogs', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('blogs/{blog:slug}', [\App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
Route::get('blogs/category/{category:slug}', [\App\Http\Controllers\BlogController::class, 'category'])->name('blog.category');
// contact
Route::get('contact', function() {
    return view('contact');
})->name('contact');
// pemesanan
Route::post('pemesanan', [App\Http\Controllers\PemesananController::class, 'store'])->name('pemesanan.store');
