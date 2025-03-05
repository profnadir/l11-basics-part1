<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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


Route::get('/users', [UserController::class, 'index'])->name("users.index");
Route::get('/users/create', [UserController::class, 'create'])->name("users.create");
Route::post('/users', [UserController::class, 'store'])->name("users.store");
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name("users.edit");
Route::put('/users/{id}', [UserController::class, 'update'])->name("users.update");
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name("users.destroy");

/* Route::prefix("admin")->middleware("auth")->group(function(){
    Route::get('/users', [UserController::class, 'index'])->name("users.index");
    Route::get('/users/create', [UserController::class, 'create'])->name("users.create");
    Route::post('/users', [UserController::class, 'store'])->name("users.store");
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name("users.edit");
    Route::put('/users/{id}', [UserController::class, 'update'])->name("users.update");
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name("users.destroy");
}); */

require __DIR__.'/auth.php';
