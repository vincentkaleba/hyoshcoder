<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::get('/projects/{project}', [PortfolioController::class, 'show'])->name('projects.show');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes 
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('projects', ProjectController::class);
    Route::get('messages', [ContactController::class, 'index'])->name('admin.messages');
    Route::get('messages/{contact}', [ContactController::class, 'show'])->name('admin.messages.show');
});
