<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GpController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\PostController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/gplist', [PostController::class, 'gplist'])->name('gplist');
Route::get('/reservation/{id}', [PostController::class, 'getGp'])->whereNumber('id')->name('reservation');
Route::get('/blog', [GpController::class, 'blog'])->name('blog');
Route::get('/contact', [GpController::class, 'contact'])->name('contact');
