<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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
    return view('home');
});

// Routes for dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

// Routes for users
Route::get('/signup', [UserController::class, 'signup']);
Route::post('/users/create', [UserController::class, 'create']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);

// Routes for login
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Routes for posts
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'new']);
Route::post('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{id}', [PostController::class, 'show'])->where('id', '[0-9]+');
Route::get('/posts/{id}/edit', [PostController::class, 'edit']);
Route::post('/posts/{id}/update', [PostController::class, 'update']);
Route::get('/posts/{id}/delete', [PostController::class, 'delete']);
Route::post('/posts/{id}/delete', [PostController::class, 'destroy']);