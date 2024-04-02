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

Route::get('/clothes', [UserClothesController::class, 'index'])->middleware(['auth', 'role:user,admin'])->name('clothes.index');
Route::get('/clothes/{clothes}', [UserClothesController::class, 'show'])->middleware(['auth', 'role:user,admin'])->name('clothes.show');

Route::resource('/admin/clothes', AdminClothesController::class)->middleware(['auth', 'role:admin'])->names('admin.clothes');
Route::post('admin/clothes', [AdminClothesController::class, 'store'])->middleware(['auth', 'role:admin'])->name('admin.clothes.store');
Route::post('admin/clothes/{cloth}', [AdminClothesController::class, 'update'])->middleware(['auth', 'role:admin'])->name('clothes.update');
Route::delete('admin/clothes/{cloth}', [AdminClothesController::class, 'destroy'])->middleware(['auth', 'role:admin'])->name('clothes.destroy');

Route::get('/books', [UserBookController::class, 'index'])->middleware(['auth', 'role:user,admin'])->name('books.index');
Route::get('/books/{book}', [UserBookController::class, 'show'])->middleware(['auth', 'role:user,admin'])->name('books.show');

Route::resource('/admin/books', AdminBookController::class)->middleware(['auth', 'role:admin'])->names('admin.books');
Route::post('admin/books/{book}', [AdminBookController::class, 'update'])->middleware(['auth', 'role:admin'])->name('books.update');
Route::delete('admin/books/{book}', [AdminBookController::class, 'destroy'])->middleware(['auth', 'role:admin'])->name('books.destroy');

Route::get('/miscellaneouses', [UserMiscellaneousController::class, 'index'])->middleware(['auth', 'role:user,admin'])->name('miscellaneouses.index');
Route::get('/miscellaneouses/{miscellaneous}', [UserMiscellaneousController::class, 'show'])->middleware(['auth', 'role:user,admin'])->name('miscellaneouses.show');

Route::resource('/admin/miscellaneouses', AdminMiscellaneousController::class)->middleware(['auth', 'role:admin'])->names('admin.miscellaneouses');
Route::post('admin/miscellaneouses/{miscellaneous}', [AdminMiscellaneousController::class, 'update'])->middleware(['auth', 'role:admin'])->name('miscellaneouses.update');
Route::delete('admin/miscellaneouses/{miscellaneous}', [AdminMiscellaneousController::class, 'destroy'])->middleware(['auth', 'role:admin'])->name('miscellaneouses.destroy');

require __DIR__.'/auth.php';
