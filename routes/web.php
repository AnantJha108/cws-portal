<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::match(["post","get"],"/login", [AuthController::class,"login"])->name("login");
Route::match(["post","get"],"/register", [AuthController::class,"register"])->name("register");


Route::get('/',[HomeController::class,"index"])->name("homepage");
Route::get('/viewCourse/{id}',[HomeController::class,"viewCourse"])->name("view");
Route::get('/allCourse',[HomeController::class,"allCourse"])->name("viewAll");

Route::prefix("admin")->middleware("auth")->group(function(){
    Route::get("/",[AdminController::class,"index"])->name("admin.dashboard");
    Route::match(["post","get"],"/login",[AuthController::class,"adminLogin"])->name("admin.login");
    Route::resource('course',CourseController::class);
});
