<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\ProfileController;

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
|
| Acá van las rutas de los usuarios ADMIN.
|
*/

Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Admin Profile
|--------------------------------------------------------------------------
|
| Acá van las rutas de los usuarios del perfil.
|
*/

Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::post('profile/update', [ProfileController::class, 'admin_profile'])->name('profile.update');
Route::post('profile/update/password', [ProfileController::class, 'password'])->name('password.update');


/*
|--------------------------------------------------------------------------
| Slider
|--------------------------------------------------------------------------
|
| Acá van las rutas de slider.
|
*/
Route::resource('/slider', SliderController::class);

/*
|--------------------------------------------------------------------------
| Category
|--------------------------------------------------------------------------
|
| Acá van las rutas de category.
|
*/
Route::resource('/category', CategoryController::class);
