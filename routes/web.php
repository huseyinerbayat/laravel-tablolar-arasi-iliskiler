<?php

use App\Http\Controllers\PhoneController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/phones', [PhoneController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/posts', [UserController::class, 'posts']);
Route::get('/users/roles', [UserController::class, 'roles']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/roles', [RoleController::class, 'index']);