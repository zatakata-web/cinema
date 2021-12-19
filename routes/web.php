<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PosterController;
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

Route::get('/', [PosterController::class, 'index'])->name('poster.index');

Route::get('/agreement', [PagesController::class, 'agreement'])->name('agreement.index');
Route::get('/politics', [PagesController::class, 'politics'])->name('politics.index');