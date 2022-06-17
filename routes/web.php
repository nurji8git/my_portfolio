<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\WelcomeEdController;
use App\Http\Controllers\ExperienceEdController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/login', function () {return view('index');});

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/logout', function () {return view('index');});

Route::get('/admin/welcome_ed', function () {return view('editors.welcome_ed');})->name('welcome_ed');
Route::post('/admin/welcome_ed', [WelcomeEdController::class, 'edit'])->name('welcome_ed');

Route::get('/admin/about_ed', function () {return view('editors.about_ed');})->name('about_ed');

Route::get('/admin/projects_ed', function () {return view('editors.projects_ed');})->name('projects_ed');

Route::get('/admin/skills_ed', function () {return view('editors.skills_ed');})->name('skills_ed');

Route::get('/admin/experience_ed', [ExperienceEdController::class, 'index'])->name('experience_ed');
Route::post('/admin/experience_ed/add', [ExperienceEdController::class, 'add'])->name('add_experience');