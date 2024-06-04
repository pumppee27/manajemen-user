<?php

use App\Http\Controllers\UppdController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

// UPPD
Route::get('/uppd', [UppdController::class, 'index'])->name('uppd');
Route::post('/uppd', [UppdController::class, 'store']);

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::post('/user', [UserController::class, 'store']);
Route::patch('/is_active/{id}', [UserController::class, 'is_active']);
