<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
|
| Acá van las rutas de los usuarios ADMIN.
|
*/

Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
