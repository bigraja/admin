<?php

use Bigraja\Admin\Http\Controllers\LoginController;
use Bigraja\Admin\Http\Controllers\DashboardController;
use Bigraja\Admin\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;


Route::get("/login", [LoginController::class, "show"])
    ->name("adminLogin");

Route::post("/login", [LoginController::class, "login"]);

Route::get("/dashboard", [DashboardController::class, "show"]);

Route::group(['prefix' => 'settings'], function () {
    Route::get('/general', [SettingController::class, 'general']);
});
