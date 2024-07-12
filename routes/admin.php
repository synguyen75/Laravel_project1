<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashbroadController;

Route::prefix('admin')->group(function (){
    Route::get("/dashboard", [AdminDashbroadController::class, 'index'])->name('admin.dashboard') 
});
