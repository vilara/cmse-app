<?php

use App\Http\Controllers\LoginController;
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

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('AlreadyLoggedIn');
Route::get('/register', [LoginController::class, 'register'])->name('register')->middleware('AlreadyLoggedIn');;
Route::post('/create', [LoginController::class, 'create'])->name('auth-create');
Route::post('/check', [LoginController::class, 'check'])->name('auth-check');
Route::get('/profile', [LoginController::class, 'profile'])->name('profile')->middleware('authSite');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
//Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

Route::middleware(['authSite'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */
