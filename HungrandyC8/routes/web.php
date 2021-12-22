<?php

use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckAdmin;
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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('staffs', StaffController::class)->middleware(CheckAdmin::class);;
Route::prefix("admin")->group(function(){
    Route::get('/',[UserController::class,'index'])->name("admin.index");
    Route::get('/create',[UserController::class,'create'])->name("admin.create");
    Route::post('/store',[UserController::class,'store'])->name("admin.store");
    Route::get('/login',[UserController::class,'login'])->name("admin.login");
    Route::post('/handlelogin',[UserController::class,'handlelogin'])->name("admin.handlelogin");
    Route::get('/logout',[UserController::class,'logout'])->name("admin.logout");
         
});