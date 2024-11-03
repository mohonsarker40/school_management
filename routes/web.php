<?php

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

Route::get('/', [\App\Http\Controllers\auth\AuthController::class, 'index']);
Route::post('login', [\App\Http\Controllers\auth\AuthController::class, 'authLogin']);
Route::get('logout', [\App\Http\Controllers\auth\AuthController::class, 'logout']);


Route::get('admin/admin/list', function () {
    return view('admin.admin.list');
});


Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [\App\Http\Controllers\DashboardController::class, 'dashboard']);
});

Route::group(['middleware' => 'teacher'], function () {
    Route::get('teacher/dashboard', [\App\Http\Controllers\DashboardController::class, 'dashboard']);
});

Route::group(['middleware' => 'student'], function () {
    Route::get('student/dashboard', [\App\Http\Controllers\DashboardController::class, 'dashboard']);
});

Route::group(['middleware' => 'parent'], function () {
    Route::get('parent/dashboard', [\App\Http\Controllers\DashboardController::class, 'dashboard']);
});