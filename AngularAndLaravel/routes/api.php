<?php

use App\Http\Controllers\StaffsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('staffs')->group(function () {
    Route::get('/', [StaffsController::class, 'index']);
    Route::get('/{id}', [StaffsController::class, 'show']);
    Route::post('/', [StaffsController::class, 'store']);
    Route::put('/{id}', [StaffsController::class, 'update']);
    Route::delete('/{id}', [StaffsController::class, 'destroy']);
});
// Route::get('/customers', 'CustomerController@index')->name('customers.all');
// Route::get('/customers/{customerId}', 'CustomerController@show')->name('customers.show');
// Route::post('/customers', 'CustomerController@store')->name('customers.store');
// Route::put('/customers/{customerId}', 'CustomerController@update')->name('customers.update');
// Route::delete('/customers/{customerId}', 'CustomerController@destroy')->name('customers.destroy');