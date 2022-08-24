<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,"index"])->name("homepage");
Route::get('/viewCourse',[HomeController::class,"viewCourse"])->name("viewCourse");

Route::prefix("admin")->group(function(){
    Route::get("/",[AdminController::class,"index"])->name("admin.dashboard");
    Route::resource('course',CourseController::class);
});
