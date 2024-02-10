<?php

use App\Models\Devices;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Problems;

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

//Order Route
Route::get('order', [OrderController::class, 'index']);

Route::post('problems', function (Request $request) {
    $problems = Devices::find($request->perangkat)->problems;
    return $problems;
});

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

    Route::post('order', [OrderController::class, 'store']);
    Route::post('order/{id}', [OrderController::class, 'destroy']);
    Route::get('history', [OrderController::class, 'history']);
    Route::get('invoice/{id}', function (string $id) {
        $data = Order::find($id);
        return view(
            'orders.invoice',
            [
                'data' => $data
            ]
        );
    });
});

require __DIR__ . '/auth.php';
