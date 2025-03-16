<?php

use Illuminate\Support\Facades\Route;

//login
Route::get('/', [\App\Http\Controllers\auth\AuthController::class, 'index']);
Route::post('login', [\App\Http\Controllers\auth\AuthController::class, 'authLogin']);
Route::get('logout', [\App\Http\Controllers\auth\AuthController::class, 'logout']);
Route::get('forgot_password', [\App\Http\Controllers\auth\AuthController::class, 'forgot_password']);


Route::get('admin/admin/list', function () {
    return view('admin.admin.list');
});

Route::get('admin/admin/create', function () {
    return view('admin.admin.create');
});


    Route::post('admin/store', [\App\Http\Controllers\AdminController::class, 'admin.store']);

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