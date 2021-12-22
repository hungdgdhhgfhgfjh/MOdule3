<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckLeader;
use App\Http\Middleware\CheckStaffs;
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
Route::prefix('staff')->group(function () {
    Route::get('/', [StaffController::class, 'index'])->name("staff.index");
    Route::get('/create', [StaffController::class, 'create'])->name("staff.create")->middleware(CheckLeader::class);
    Route::post('/store', [StaffController::class, 'store'])->name("staff.store")->middleware(CheckLeader::class);
    Route::get('/edit/{id}', [StaffController::class, 'edit'])->name("staff.edit")->middleware(CheckLeader::class);
    Route::get('/delete/{id}', [StaffController::class, 'delete'])->name("staff.delete")->middleware(CheckLeader::class);
});
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name("user.index");
    Route::get('/create', [UserController::class, 'create'])->name("user.create")->middleware(CheckStaffs::class);
    Route::post('/store', [UserController::class, 'store'])->name("user.store")->middleware(CheckStaffs::class);
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name("user.edit")->middleware(CheckStaffs::class);
    Route::get('/delete/{id}', [UserController::class, 'delete'])->name("user.delete")->middleware(CheckStaffs::class);
});
Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'login'])->name("login");
    Route::post('/handleLogin', [LoginController::class, 'handleLogin'])->name("handleLogin");
    Route::get('/logout', [LoginController::class, 'logout'])->name("logout");
   
});

