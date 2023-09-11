<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\VendorController;

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
|
| Acá van las rutas de los usuarios ADMIN.
|
*/

Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->middleware('auth')->name('admin.dashboard');

/*
|--------------------------------------------------------------------------
| Vendor
|--------------------------------------------------------------------------
|
| Acá van las rutas de los usuarios VENDOR.
|
*/

Route::get('vendor/dashboard', [VendorController::class, 'dashboard'])->middleware('auth')->name('vendor.dashboard');
