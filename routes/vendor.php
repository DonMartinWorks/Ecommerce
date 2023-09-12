<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\VendorController;

/*
|--------------------------------------------------------------------------
| Vendor
|--------------------------------------------------------------------------
|
| Acá van las rutas de los usuarios VENDOR.
|
*/

Route::get('dashboard', [VendorController::class, 'dashboard'])->name('dashboard');
