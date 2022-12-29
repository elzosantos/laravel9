<?php

use App\Http\Controllers\ProfileController;
 
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
 
Route::delete('users/cars/{id}', [CarController::class, 'destroy'])->name('cars.destroy');
Route::post('users/{id}/cars', [CarController::class, 'store'])->name('cars.store');
Route::get('users/{id}/cars/create', [CarController::class, 'create'])->name('cars.create');
Route::put('users/cars/{id}', [CarController::class, 'update'])->name('cars.update');
Route::get('users/{user}/cars/{id}', [CarController::class, 'edit'])->name('cars.edit');
Route::get('users/{id}/cars', [CarController::class, 'index'])->name('cars.index');
Route::get('users/cars/{id}', [CarController::class, 'show'])->name('cars.show');

Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

Route::get('/sendmail', [MailController::class, 'index'])->name('mail.index');

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

Route::get('/', function () {
    return view('auth/login');
});

 

require __DIR__.'/auth.php';
