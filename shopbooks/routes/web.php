<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderdetailsController;
use App\Http\Controllers\SupportUserController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\checkAdminLogin;
use App\Http\Middleware\checkLoginUser;
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

Route::middleware([checkAdminLogin::class])->prefix("admin")->group(function(){

    Route::resource("users",UsersController::class);    
    
    Route::resource("categories",CategoryController::class);
    
    Route::resource("books",BookController::class);
    
    Route::get('/cart',[CartController::class,'index'])->name("cart.index");
    
    Route::get('/order',[OrderController::class,'index'])->name("order.index");
    
    Route::get('/order/edit/{id}',[OrderController::class,'edit'])->name("order.edit");
    
    Route::post('/order/update/{id}',[OrderController::class,'update'])->name("order.update");
    
    Route::get('/order/destroy/{id}',[OrderController::class,'destroy'])->name("order.destroy");
    
    Route::get('/orderdetails/{id}',[OrderdetailsController::class,'index'])->name("orderdetails.index");
    
    Route::get('/edit/{id}/{orders_id}',[OrderdetailsController::class,'edit'])->name("orderdetails.edit");
    
    Route::post('/update/{id}/{orders_id}',[OrderdetailsController::class,'update'])->name("orderdetails.update");
    
    Route::get('/delete/{id}',[OrderdetailsController::class,'delete'])->name("orderdetails.delete");
    
    Route::get('/index/{id}',[SupportUserController::class,'index'])->name("supportUser.index");
    
    Route::post('/update/{id}',[SupportUserController::class,'update'])->name("supportUser.update");
    
});
Route::middleware([checkLoginUser::class])->prefix("homeUser")->group(function(){

    Route::get('/',[HomeUserController::class,'index'])->name("homeUser.index");
    
    Route::get('/bookDetails/{id}',[HomeUserController::class,'bookDetails'])->name("homeUser.bookDetails");
    
    Route::get('/booksListing/{id}',[HomeUserController::class,'booksListing'])->name("homeUser.booksListing");
    
    Route::post('/addToCart/{id}',[HomeUserController::class,'addToCart'])->name("homeUser.addToCart");
    
    Route::get('/cart',[HomeUserController::class,'cart'])->name("homeUser.cart");
    
    Route::post('/fixCartUser/{id}',[HomeUserController::class,'fixCartUser'])->name("homeUser.fixCartUser");
    
    Route::get('delelteCartUser/{id}',[HomeUserController::class,'delelteCartUser'])->name("homeUser.delelteCartUser");
    
    Route::get('/supportsCustomer',[HomeUserController::class,'supportsCustomer'])->name("homeUser.supportsCustomer");
    
    Route::post('/mesageUser',[HomeUserController::class,'mesageUser'])->name("homeUser.mesageUser");
    
    Route::get('/checkout',[HomeUserController::class,'checkout'])->name("homeUser.checkout");
    
    Route::post('/pay',[HomeUserController::class,'pay'])->name("homeUser.pay");
    
    Route::get('/logout',[HomeUserController::class,'logout'])->name("homeUser.logout");
    
    Route::get('/informattionUser',[HomeUserController::class,'informattionUser'])->name("homeUser.informattionUser");
    
    Route::get('/fixInformationUser',[HomeUserController::class,'fixInformationUser'])->name("homeUser.fixInformationUser");
    
    Route::post('/handleInformationUser',[HomeUserController::class,'handleInformationUser'])->name("homeUser.handleInformationUser");
    
    Route::get('/orderUser',[HomeUserController::class,'orderUser'])->name("homeUser.orderUser");
    
    Route::get('/order_detailsUser/{id}',[HomeUserController::class,'order_detailsUser'])->name("homeUser.order_detailsUser");

});

Route::prefix("home")->group(function(){

         Route::get('/',[Homecontroller::class,'index'])->name("home.index");
         
         Route::get('/booksListing/{id}',[Homecontroller::class,'booksListing'])->name("home.booksListing");
         
         Route::get('/bookDetails/{id}',[Homecontroller::class,'bookDetails'])->name("home.bookDetails");
         
         Route::get('/register',[Homecontroller::class,'register'])->name("home.register");
         
         Route::get('/logout',[Homecontroller::class,'logout'])->name("home.logout");
         
         Route::get('/login',[Homecontroller::class,'login'])->name("home.login");
         
         Route::post('/handleLogin',[Homecontroller::class,'handleLogin'])->name("home.handleLogin");
         
         Route::post('/acctionRegister',[Homecontroller::class,'acctionRegister'])->name("home.acctionRegister");
         
    });
    