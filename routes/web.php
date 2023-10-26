<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Api\TestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ReviewController;
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



Route::get('/', [IndexController::class, 'index'])->name('index.index');
Route::get('/about-us', [AboutController::class, 'aboutUs'])->name('about.about-us');
Route::get('/api/test/array', [TestController::class, 'arrayResponse'])->name('array.response');
Route::get('/api/test/model', [TestController::class, 'modelResponse'])->name('model.response');
Route::get('/api/test/model', [TestController::class, 'collectionResponse'])->name('collection.response');

Route::get('/home', [HomeController::class, 'home'])->middleware('auth')->name('home');

Route::get('/book/{book_id}', [BookController::class, 'details'])->name('book.details');


//all admin routes
Route::group(['middleware' => 'can:admin'], function () {

    //any routes in here automatically get settings from the group
    Route::get('/admin/books', [BookController::class, 'index'])->name('admin.books');
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.user');
});
// Route::get('/details/{book_id}');


Route::group(['middleware' => 'can:user'], function () {

    Route::get('/reviews/review', [ReviewController::class, 'index'])->name('review');
});