<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionCookieController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/set-session', [SessionCookieController::class, 'setSession']);
Route::get('/get-session', [SessionCookieController::class, 'getSession']);
Route::get('/clear-session', [SessionCookieController::class, 'clearSession']);

Route::get('/set-cookie', [SessionCookieController::class, 'setCookie']);
Route::get('/get-cookie', [SessionCookieController::class, 'getCookie']);

Route::get('/visit', [SessionCookieController::class, 'visit']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('checklogin');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');