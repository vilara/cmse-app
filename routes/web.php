<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Model\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\PrincipalController;

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

Route::post('/create', [LoginController::class, 'create'])->name('auth-create');
Route::post('/check', [LoginController::class, 'check'])->name('auth-check');

Route::group(['middleware' => ['AlreadyLoggedIn']], function(){
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/register', [LoginController::class, 'register'])->name('register');
});

Route::group(['middleware' => ['authSite']], function(){
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/principal', [LoginController::class, 'profile'])->name('principal');
    Route::get('/dashboard', [LoginController::class, 'profile'])->name('dashboard');
    Route::get('/teste', [PrincipalController::class, 'teste'])->name('teste');
    Route::resource('users', UserController::class);
});
//Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

/* Route::middleware(['authSite'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */
/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */
