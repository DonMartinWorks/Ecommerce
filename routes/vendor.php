<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\Backend\VendorProfileController;

/*
|--------------------------------------------------------------------------
| Vendor
|--------------------------------------------------------------------------
|
| Acá van las rutas de los usuarios VENDOR.
|
*/

Route::get('dashboard', [VendorController::class, 'dashboard'])->name('dashboard');
Route::get('profile', [VendorProfileController::class, 'index'])->name('profile');
Route::put('/profile', [VendorProfileController::class, 'update'])->name('profile.update');
Route::post('/profile/password', [VendorProfileController::class, 'password'])->name('profile.update.password');
