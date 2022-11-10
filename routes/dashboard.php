<?php
use App\Http\Controllers\backend\admin_permatron\AdminController;
use App\Http\Controllers\backend\admin_permatron\RoleController;
use App\Http\Controllers\backend\CategoriesController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\Ckeditor\Ckeditor;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth:admin' ]
    ], function(){ //...
   Route::post('/pages/uploadImage',[Ckeditor::class,'uploadImage'])->name('upload.image');
    Route::get('/admin',DashboardController::class)->name('Admin_dashboard');
    Route::resource('categories', CategoriesController::class)->except('show'); 
    Route::resource('admins', AdminController::class);
    Route::resource('roles', RoleController::class);


    });