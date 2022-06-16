<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogoutController;

Route::get('/', function () {return view('index');})->name('index');

Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/login', function () {return view('index');});

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/logout', function () {return view('index');});

Route::get('/project/{id}', function ($id) {return view('project');});