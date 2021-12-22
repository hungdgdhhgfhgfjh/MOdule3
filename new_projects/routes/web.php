<?php

use App\Http\Controllers\Usercontroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::prefix('/users')->group(function () {
   Route::get('/create',Usercontroller::class,"create")->name("users.create");
   Route::get('/index',Usercontroller::class,"index")->name("users.index");
   Route::get('/login',Usercontroller::class,"login")->name("users.login");
   Route::post('/store',Usercontroller::class,"store")->name("users.store");
});