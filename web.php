<?php

use Bigraja\Admin\Http\Controllers\DriverController;
use Bigraja\Admin\Http\Controllers\LoginController;
use Bigraja\Admin\Http\Controllers\DashboardController;
use Bigraja\Admin\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;


Route::get("/", [DashboardController::class, "index"])->name("admin");

Route::resource("drivers", DriverController::class);
