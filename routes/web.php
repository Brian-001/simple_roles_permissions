<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TableController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| @param Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route::get('/register', 'App\Http\Controllers\AuthController@showRegistrationForm')->name('register');

Route::resource('dishes', DishController::class);
Route::resource('rooms', RoomController::class);
Route::resource('tables', TableController::class);

Route::get('/admins', [AdminController::class, 'index'])->name('admins.index');

Route::get('admins/admin_dish', [AdminController::class, 'adminDish'])->name('admins.admin_dish');
Route::get('admins/admin_room', [AdminController::class, 'adminRoom'])->name('admins.admin_room');
Route::get('admins/admin_table', [AdminController::class, 'adminTable'])->name('admins.admin_table');

Route::get('admins/admin_order', [AdminController::class, 'adminOrder'])->name('admins.admin_order');
