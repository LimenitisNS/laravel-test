<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, "main_page"]);

Route::get('/admin', [AdminController::class, "admin_page"]);

Route::get("/registration", [AuthController::class, "register_page"]);

Route::get("/login", [AuthController::class, "login_page"]);

Route::post("/admin/category/delete", [AdminController::class, "category_delete"]);

Route::post("/auth/register/", [AuthController::class, "register"]);

Route::post("/auth/login/", [AuthController::class, "login"]);

Route::get("/logout", [AuthController::class, "logout"]);

Route::get("/add-product", [AdminController::class, "add_product_page"]);

Route::post("/admin/add-product", [AdminController::class, "add_product"]);


//Route::get('/test', function () {
//    return response('Тестовый маршрут', 200);
//});
