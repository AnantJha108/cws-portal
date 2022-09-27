<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PlacementController;
use App\Http\Controllers\StudentCoursesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::middleware("")->group(function () {
    Route::match(["post", "get"], "/login", [AuthController::class, "login"])->name("login");
    Route::match(["post", "get"], "/register", [AuthController::class, "register"])->name("register");
    Route::get("/logout", [AuthController::class, "logout"])->name("logout");
// });


Route::get('/', [HomeController::class, "index"])->name("homepage");
Route::get('/viewCourse/{id}', [HomeController::class, "viewCourse"])->name("view");
Route::get('/allCourse', [HomeController::class, "allCourse"])->name("viewAll");

Route::prefix("admin")->middleware("auth")->group(function () {
    Route::get("/", [AdminController::class, "index"])->name("admin.dashboard");
    Route::match(["post", "get"], "/login", [AuthController::class, "adminLogin"])->name("admin.login");
    Route::get("/adminLogout", [AuthController::class, "adminLogout"])->name("admin.logout");
    Route::resource('course', CourseController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('user', UserController::class);
    Route::resource('placement', PlacementController::class);

    Route::post("/student/course/join",[StudentCoursesController::class,"join_course"])->name("student.course.join");
});
