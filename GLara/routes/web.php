<?php

use App\Http\Controllers\ProfileController;
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

// Route::middleware(['auth'])->group(function () {
//    Route::get('/admin', function () {
//        return view('admin.dashboard');
//    })->name('admin.dashboard');
//});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/permissions', [App\Http\Controllers\AdminController::class, 'permissions'])->name('admin.permissions');
    Route::get('/admin/roles', [App\Http\Controllers\AdminController::class, 'roles'])->name('admin.roles');
    Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'users'])->name('admin.users');
    Route::get('/admin/menus', [App\Http\Controllers\AdminController::class, 'menus'])->name('admin.menus');
    Route::get('/admin/categories', [App\Http\Controllers\AdminController::class, 'categories'])->name('admin.categories');
    Route::get('/admin/media', [App\Http\Controllers\AdminController::class, 'media'])->name('admin.media');
});


use App\Http\Controllers\AdminController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('users', [AdminController::class, 'users'])->name('users');
    Route::get('users/create', [AdminController::class, 'createUser'])->name('users.create');
    Route::post('users', [AdminController::class, 'storeUser'])->name('users.store');
    Route::delete('users/{user}', [AdminController::class, 'destroyUser'])->name('users.destroy');
    // Add more routes as needed
});


require __DIR__.'/auth.php';
