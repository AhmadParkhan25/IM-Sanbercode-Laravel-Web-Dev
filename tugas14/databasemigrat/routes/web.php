<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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


// CRUD


// menampilkan list data Category (boleh menggunakan table html atau bootstrap card)
Route::get('/category', [CategoryController::class, 'index']);


// menampilkan form untuk membuat data Category baru
Route::get('/category/create', [CategoryController::class, 'create']);
//menyimpan data baru ke tabel Category
Route::post('/category', [CategoryController::class, 'store']);



//menampilkan detail data category dengan id tertentu
Route::get('/category/{id}', [CategoryController::class, 'show']);

//menampilkan form untuk edit category dengan id tertentu
Route::get('/category/{id}/edit', [CategoryController::class, 'edit']);

// menyimpan perubahan data category (update) untuk id tertentu
Route::put('/category/{id}', [CategoryController::class, 'update']);

// menghapus data category dengan id tertentu
Route::delete('/category/{id}', [CategoryController::class, 'destroy']);