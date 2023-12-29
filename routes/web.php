<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;

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

//User Route
Route::get('/', [UserController::class, 'index']);

//Auth Route
Route::get('/login', [AuthController::class, 'index']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/reset-pass', [AuthController::class, 'reset_pass']);

//User Route
Route::get('/order', [OrderController::class, 'index']);
Route::get('/input-order', [OrderController::class, 'create']);