<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableControl;
use App\Http\Controllers\Home;

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

Route::get('/', [Home::class, 'dashboard']);

Route::get('/table', [TableControl::class, 'table']);

Route::get('/data-tables', [TableControl::class, 'dataTables']);
