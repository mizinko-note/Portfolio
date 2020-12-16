<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeTopController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;

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

/** TOP */
Route::get('/', [WelcomeTopController::class,'index'])->name('home');
Route::get('/index', [WelcomeTopController::class,'index']);

/** サービス */
Route::get('/service', [ServiceController::class,'index'])->name('service');

/** Blog */
Route::get('/blog', [BlogController::class,'index'])->name('blog');
