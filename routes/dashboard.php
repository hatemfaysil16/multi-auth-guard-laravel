<?php
use Illuminate\Support\Facades\Route;


Route::get('/admin', function () {
    return view('Admin_dashboard');
})->middleware(['auth:admin'])->name('Admin_dashboard');