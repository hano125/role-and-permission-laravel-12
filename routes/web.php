<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/role', [RoleController::class, 'index'])->name('role.index')->middleware(['auth']);
Route::get('/role/create', [RoleController::class, 'create'])->name('role.create')->middleware(['auth']);
Route::post('/role/store', [RoleController::class, 'store'])->name('role.store')->middleware(['auth']);
Route::get('/theme', ThemeController::class)->name('theme')->middleware(['auth']);

require __DIR__ . '/auth.php';
