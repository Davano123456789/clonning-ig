<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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
})->middleware('auth');
// login
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'registered'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

// tampilan home
Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
Route::get('/profile', [HomeController::class, 'profile'])->middleware('auth');
Route::get('/editProfile', [HomeController::class, 'editProfile'])->middleware('auth');
Route::put('/profile', [HomeController::class, 'updateProfile'])->middleware('auth');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/reels', [HomeController::class, 'reels'])->middleware('auth');
Route::get('/explore', [HomeController::class, 'explore'])->middleware('auth');
Route::post('/createPost', [HomeController::class, 'store'])->middleware('auth');
Route::get('/viewUser/{id}', [HomeController::class, 'viewUser'])->middleware('auth');
Route::post('/like/{post}', [HomeController::class, 'like'])->name('likePost');
Route::post('/unlike/{post}', [HomeController::class, 'unlike'])->name('unlikePost');
Route::post('/home/{post}', [HomeController::class, 'userComent'])->middleware('auth');
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
Route::post('/comment/{id}', [HomeController::class, 'storeComent'])->name('commentPost');

