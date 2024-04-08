<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\ClothesController as AdminClothesController;
use App\Http\Controllers\User\ClothesController as UserClothesController;
use App\Http\Controllers\Admin\BookController as AdminBookController;
use App\Http\Controllers\User\BookController as UserBookController;
use App\Http\Controllers\Admin\MiscellaneousController as AdminMiscellaneousController;
use App\Http\Controllers\User\MiscellaneousController as UserMiscellaneousController;
use App\Http\Controllers\Admin\WishlistController as AdminWishlistController;
use App\Http\Controllers\User\WishlistController as UserWishlistController;

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

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', [HomeController::class, 'index'])->name('home.index');

/* user clothes */
Route::resource('/clothes', UserClothesController::class)->middleware(['auth', 'role:user,admin'])->names('user.clothes');
Route::get('/clothes', [UserClothesController::class, 'index'])->middleware(['auth', 'role:user,admin'])->name('clothes.index');
Route::get('/clothes/{cloth}', [UserClothesController::class, 'show'])->middleware(['auth', 'role:user,admin'])->name('clothes.show');
Route::post('/clothes/{cloth}', [UserClothesController::class, 'like'])->middleware(['auth', 'role:user,admin'])->name('clothes.like');

/* admin clothes */
Route::resource('/admin/clothes', AdminClothesController::class)->middleware(['auth', 'role:admin'])->names('admin.clothes');
Route::post('admin/clothes/{cloth}', [AdminClothesController::class, 'update'])->middleware(['auth', 'role:admin'])->name('clothes.update');
Route::delete('admin/clothes/{cloth}', [AdminClothesController::class, 'destroy'])->middleware(['auth', 'role:admin'])->name('clothes.destroy');
Route::post('/clothes/{cloth}', [AdminClothesController::class, 'like'])->middleware(['auth', 'role:admin'])->name('clothes.like');

/* user books */
Route::resource('/books', UserBookController::class)->middleware(['auth', 'role:user,admin'])->names('user.books');
Route::get('/books', [UserBookController::class, 'index'])->middleware(['auth', 'role:user,admin'])->name('books.index');
Route::get('/books/{book}', [UserBookController::class, 'show'])->middleware(['auth', 'role:user,admin'])->name('books.show');
Route::post('/books/{book}', [UserBookController::class, 'like'])->middleware(['auth', 'role:user,admin'])->name('books.like');

/* admin books */
Route::resource('/admin/books', AdminBookController::class)->middleware(['auth', 'role:admin'])->names('admin.books');
Route::post('admin/books/{book}', [AdminBookController::class, 'update'])->middleware(['auth', 'role:admin'])->name('books.update');
Route::delete('admin/books/{book}', [AdminBookController::class, 'destroy'])->middleware(['auth', 'role:admin'])->name('books.destroy');
Route::post('/books/{book}', [AdminBookController::class, 'like'])->middleware(['auth', 'role:admin'])->name('books.like');

/* user miscellaneouses */
Route::resource('/miscellaneouses', UserMiscellaneousController::class)->middleware(['auth', 'role:user,admin'])->names('user.miscellaneouses');
Route::get('/miscellaneouses', [UserMiscellaneousController::class, 'index'])->middleware(['auth', 'role:user,admin'])->name('miscellaneouses.index');
Route::get('/miscellaneouses/{miscellaneous}', [UserMiscellaneousController::class, 'show'])->middleware(['auth', 'role:user,admin'])->name('miscellaneouses.show');
Route::post('/miscellaneouses/{miscellaneous}', [UserMiscellaneousController::class, 'like'])->middleware(['auth', 'role:user,admin'])->name('miscellaneouses.like');

/* admin miscellaneouses */
Route::resource('/admin/miscellaneouses', AdminMiscellaneousController::class)->middleware(['auth', 'role:admin'])->names('admin.miscellaneouses');
Route::post('admin/miscellaneouses/{miscellaneous}', [AdminMiscellaneousController::class, 'update'])->middleware(['auth', 'role:admin'])->name('miscellaneouses.update');
Route::delete('admin/miscellaneouses/{miscellaneous}', [AdminMiscellaneousController::class, 'destroy'])->middleware(['auth', 'role:admin'])->name('miscellaneouses.destroy');
Route::post('/miscellaneouses/{miscellaneous}', [AdminMiscellaneousController::class, 'like'])->middleware(['auth', 'role:admin'])->name('miscellaneouses.like');

/* user wishlist */
Route::get('/wishlist', [UserWishlistController::class, 'index'])->middleware(['auth', 'role:user,admin'])->name('wishlist.index');
Route::delete('wishlist', [UserWishlistController::class, 'destroy'])->middleware(['auth', 'role:user,admin'])->name('wishlist.destroy');

/* admin wishlist */
Route::resource('/admin/wishlist', AdminWishlistController::class)->middleware(['auth', 'role:admin'])->names('admin.wishlist');
Route::delete('admin/wishlist', [AdminWishlistController::class, 'destroy'])->middleware(['auth', 'role:admin'])->name('wishlist.destroy');

require __DIR__.'/auth.php';
