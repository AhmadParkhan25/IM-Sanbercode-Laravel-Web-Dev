<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\BarrowController;
use App\Models\Barrows;

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
//menampilkan list dari kategory

Route::middleware(['auth'])->group(function () {
    Route::resource('/category', CategoryController::class);

    Route::post('/barrow/{books_id}', [BarrowController::class, 'store']);
});



// CRUD Books

Route::resource('/books', BooksController::class);
Auth::routes();


