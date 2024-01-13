<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Models\Devices;
use Illuminate\Http\Request;

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
Route::get('admin', [AdminController::class, 'index'])->middleware('auth');
Route::get('account', [AdminController::class, 'account'])->middleware('auth');
Route::get('inbox', [AdminController::class, 'inbox'])->middleware('auth');
Route::get('read-mail', [AdminController::class, 'read_mail'])->middleware('auth');
Route::get('chat', [AdminController::class, 'chat'])->middleware('auth');

//Customer Route
Route::get('my-account', function () {
    return view('customer.my_account');
})->middleware('auth');

//Auth Route
Route::get('login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [AuthController::class, 'authenticate']);
Route::post('logout', [AuthController::class, 'logout']);

Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'store']);
Route::get('reset-pass', [AuthController::class, 'reset_pass']);

//Order Route
Route::get('order', [OrderController::class, 'index']);
Route::post('order', [OrderController::class, 'store']);
Route::get('history', [OrderController::class, 'history'])->middleware('auth');

Route::post('problems', function (Request $request) {
    $problems = Devices::find($request->perangkat)->problems;
    return $problems;
});
