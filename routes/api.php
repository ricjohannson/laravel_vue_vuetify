<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('/check-auth', function () {
//     return response()->json(['authenticated' => Auth::check()], Auth::check() ? 200 : 401);
// });

//Register Page
Route::post('/register', [RegisterController::class, 'register']);

//Login Page
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

//Dashboard
Route::middleware(['auth'])->group(function () {

Route::get('/dashboard', [DashboardController::class, 'index']);

});
