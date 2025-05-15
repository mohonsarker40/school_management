<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\auth\AuthController;

//login
Route::get('/', [AuthController::class, 'index']);
Route::post('login', [AuthController::class, 'authLogin']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('forgot_password', [AuthController::class, 'forgot_password']);


Route::get('admin/admin/list', function () {
    return view('admin.admin.list');
});

Route::get('admin/admin/create', function () {
    return view('admin.admin.create');
});


Route::post('admin/store', [AdminController::class, 'admin.store']);

Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
});

Route::group(['middleware' => 'teacher'], function () {
    Route::get('teacher/dashboard', [DashboardController::class, 'dashboard']);
});

Route::group(['middleware' => 'student'], function () {
    Route::get('student/dashboard', [DashboardController::class, 'dashboard']);
});

Route::group(['middleware' => 'parent'], function () {
    Route::get('parent/dashboard', [DashboardController::class, 'dashboard']);
});