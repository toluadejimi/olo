<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


Route::any('/',[HomeController::class, 'welcome']);
Route::any('home',[HomeController::class, 'home']);
Route::any('login1',[AuthController::class, 'login']);
Route::any('login2',[AuthController::class, 'password']);
Route::any('login-now',[AuthController::class, 'login_now']);
Route::any('login-user',[AuthController::class, 'login_user']);
Route::any('logout',[AuthController::class, 'logout']);










