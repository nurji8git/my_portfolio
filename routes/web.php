<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {return view('index');});

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/project/{id}', function ($id) {return view('project');});