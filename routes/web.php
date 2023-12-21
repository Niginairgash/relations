<?php

use App\Http\Controllers\BookCotroller;
use App\Http\Controllers\CinemaController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\UserController;
use App\Models\Cinema;
use App\Models\User;
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
Route::get('/', function(){
    return view('index');
})->name('index');
Route::get('/phone', [PhoneController::class, 'index'])->name('phone');
Route::get('/user-phone',[UserController::class, 'index'])->name('user-phone');
Route::get('/author-book', [BookCotroller::class, 'index'])->name('author-book');
Route::get('/movies', [MovieController::class, 'index'])->name('movies');
Route::get('/cinemas', [CinemaController::class, 'index'])->name('cinemas');
Route::get('/user-task', [UserController::class, 'tasks'])->name('user-task');