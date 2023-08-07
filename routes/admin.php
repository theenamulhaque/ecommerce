<?php 
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryConrtroller;
use App\Http\Controllers\Backend\ChildCategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SubCategoryController;
use Illuminate\Support\Facades\Route;

// Admin Dashboard Route

Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

// Profile Route
Route::get('profile', [ProfileController::class, 'index'])->name('profile');

// Update Profile Route
Route::post('profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');

// Update Password Route
Route::post('profile/update/password', [ProfileController::class, 'updatePassword'])->name('password.update');


// Slider Route
Route::resource('slider', SliderController::class);

// Category Route
Route::put('change-status', [CategoryConrtroller::class, 'changeStatus'])->name('category.change-status');
Route::resource('category', CategoryConrtroller::class);


// Sub-Category Route
Route::put('subcategory/change-status', [SubCategoryController::class, 'changeStatus'])->name('sub-category.change-status');
Route::resource('sub-category', SubCategoryController::class);

// Child-Category Route
Route::put('childcategory/change-status', [ChildCategoryController::class, 'changeStatus'])->name('child-category.change-status');
Route::get('get-subcategories', [ChildCategoryController::class, 'getSubCatgories'])->name('get-subcategories');
Route::resource('child-category', ChildCategoryController::class);


// brand Route
Route::put('brand/change-status', [BrandController::class, 'changeStatus'])->name('brand.change-status');
Route::resource('brand', BrandController::class);

