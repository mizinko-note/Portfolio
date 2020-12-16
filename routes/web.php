<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeTopController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobCareerController;

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

/** プロフィール */
Route::get('/profile', [ProfileController::class,'index'])->name('profile');

/** ジョブキャリア */
Route::get('/jobcareer', [JobCareerController::class,'index'])->name('jobcareer');
