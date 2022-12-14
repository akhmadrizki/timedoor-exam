<?php

use App\Http\Controllers\ClientController;
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

Route::get('/', [ClientController::class, 'index'])->name('landing');
Route::get('/top-author', [ClientController::class, 'famous'])->name('famous.author');

Route::get('/input-rating/create', [ClientController::class, 'input'])->name('input.create');
Route::get('/input-rating/fetch/{id}', [ClientController::class, 'fetch'])->name('fetch.book');
Route::post('/input-rating/store', [ClientController::class, 'store'])->name('input.store');
