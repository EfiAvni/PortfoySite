<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('anasayfa');
})->name('anasayfa');

Route::post('/', [ContactController::class, 'contact']);

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::get('/db', function () {
    return view('db');
});

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/adduser', function () {
    return view('adduser');
});

Route::get('/contactMessages', [ContactController::class, 'messages'])->name('contactMessages');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('projects', [ProjectController::class, 'listProjects'])->name('listProjects');

Route::post('/projects', [ProjectController::class, 'createProject'])->name('createProject');
