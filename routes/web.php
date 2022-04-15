<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
    return view('home');
});
Route::get('/users', function () {
    return view('users/index');
});

Route::get('/signup', function () {
    return view('users/signup');
});
Route::get('/login', function () {
    return view('users/login');
});

// Routes for posts
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'new']);
Route::post('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{id}', [PostController::class, 'show'])->where('id', '[0-9]+');
Route::get('/posts/{id}/edit', [PostController::class, 'edit']);
Route::post('/posts/{id}/update', [PostController::class, 'update']);
Route::get('/posts/{id}/delete', [PostController::class, 'delete']);
Route::post('/posts/{id}/delete', [PostController::class, 'destroy']);