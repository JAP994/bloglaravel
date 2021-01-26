<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
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

Route::get('/', HomeController::class);

Route::get('users',[UserController::class, 'index'])->name('users.index');
Route::get('users/create',[UserController::class, 'create'])->name('users.create');
Route::get('users/{id}',[UserController::class, 'show'])->name('users.show');
Route::get('blogs',[BlogController::class, 'index'])->name('blogs.index');
Route::get('blogs/create',[BlogController::class, 'create'])->name('blogs.create');
Route::get('blogs/details',[BlogController::class, 'details'])->name('blogs.details');
Route::get('contact',[ContactController::class, 'index'])->name('contact');



