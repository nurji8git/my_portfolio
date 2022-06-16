<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/project/{id}', function ($id) {
    return view('project');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');