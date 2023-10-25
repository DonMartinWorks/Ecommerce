<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ChildCategoryController;

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
Route::put('/change-status', [CategoryController::class, 'change_status'])->name('category.change-status');
Route::resource('/category', CategoryController::class);

/*
|--------------------------------------------------------------------------
| Sub Category
|--------------------------------------------------------------------------
|
| Acá van las rutas de sub-category.
|
*/
Route::put('/sub-category/change-status', [SubCategoryController::class, 'change_status'])->name('sub-category.change-status');
Route::resource('/sub-category', SubCategoryController::class);

/*
|--------------------------------------------------------------------------
| Child Category
|--------------------------------------------------------------------------
|
| Acá van las rutas de child-category.
|
*/
Route::put('/child-category/change-status', [ChildCategoryController::class, 'change_status'])->name('child-category.change-status');
Route::get('/get-subcategory', [ChildCategoryController::class, 'get_subcategory'])->name('get-subcategories');
Route::resource('/child-category', ChildCategoryController::class);
