<?php

use App\Models\Devices;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('layouts.main');
    // return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //User Route
    Route::get('admin', [AdminController::class, 'index']);
    Route::get('account', [AdminController::class, 'account']);
    Route::get('inbox', [AdminController::class, 'inbox']);
    Route::get('read-mail', [AdminController::class, 'read_mail']);
    Route::get('chat', [AdminController::class, 'chat']);

    //Customer Route
    Route::get('my-account', function () {
        return view('customer.my_account');
    });

    //Auth Route
    // Route::get('login', [AuthController::class, 'index'])->name('login')->middleware('guest');
    // Route::post('login', [AuthController::class, 'authenticate']);
    // Route::post('logout', [AuthController::class, 'logout']);

    // Route::get('register', [AuthController::class, 'register']);
    // Route::post('register', [AuthController::class, 'store']);
    // Route::get('reset-pass', [AuthController::class, 'reset_pass']);

    //Order Route
    Route::get('order', [OrderController::class, 'index']);
    Route::post('order', [OrderController::class, 'store']);
    Route::get('history', [OrderController::class, 'history']);

    Route::post('problems', function (Request $request) {
        $problems = Devices::find($request->perangkat)->problems;
        return $problems;
    });
});

require __DIR__ . '/auth.php';
