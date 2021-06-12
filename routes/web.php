<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublishingHouseController;
use App\Http\Controllers\BookRatingController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;
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


Route::get('/', [HomePageController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/search', [BookController::class, 'search'])->middleware('auth');
Route::get('/searchHomePage', [BookController::class, 'searchHomePage']);

Route::get('/register', function () {
    return view('auth.login');
});

Route::get('/book', [BookController::class, 'index'])->middleware('auth');
Route::get('/book/create', [BookController::class, 'create'])->middleware('auth');
Route::Post('/book/store', [BookController::class, 'store'])->middleware('auth');
Route::get('/book/edit/{id}', [BookController::class, 'edit'])->middleware('auth');
Route::Post('/book/update', [BookController::class, 'update'])->middleware('auth');
Route::get('/book/delete/{id}', [BookController::class, 'destroy'])->middleware('auth');
Route::get('/book/show/{id}', [BookController::class, 'show'])->middleware('auth');

Route::get('/author', [AuthorController::class, 'index'])->middleware('auth');
Route::get('/author/create', [AuthorController::class, 'create'])->middleware('auth');
Route::Post('/author/store', [AuthorController::class, 'store'])->middleware('auth');
Route::get('/author/edit/{id}', [AuthorController::class, 'edit'])->middleware('auth');
Route::Post('/author/update', [AuthorController::class, 'update'])->middleware('auth');
Route::get('/author/delete/{id}', [AuthorController::class, 'destroy'])->middleware('auth');


Route::get('/publishing_houses', [PublishingHouseController::class, 'index'])->middleware('auth');
Route::get('/publishing_houses/create', [PublishingHouseController::class, 'create'])->middleware('auth');
Route::Post('/publishing_houses/store', [PublishingHouseController::class, 'store'])->middleware('auth');
Route::get('/publishing_houses/edit/{id}', [PublishingHouseController::class, 'edit'])->middleware('auth');
Route::Post('/publishing_houses/update', [PublishingHouseController::class, 'update'])->middleware('auth');
Route::get('/publishing_houses/delete/{id}', [PublishingHouseController::class, 'destroy'])->middleware('auth');



Route::get('/book_ratings', [BookRatingController::class, 'index'])->middleware('auth');
Route::get('/book_ratings/create', [BookRatingController::class, 'create'])->middleware('auth');
Route::Post('/book_ratings/store', [BookRatingController::class, 'store'])->middleware('auth');
Route::get('/book_ratings/edit/{id}', [BookRatingController::class, 'edit'])->middleware('auth');
Route::Post('/book_ratings/update', [BookRatingController::class, 'update'])->middleware('auth');
Route::get('/book_ratings/delete/{id}', [BookRatingController::class, 'destroy'])->middleware('auth');
