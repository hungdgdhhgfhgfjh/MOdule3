<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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
/* ------------thực hành đặt tên ----------------*/
// Route::get('/lession2/{name?}', function ($name = null) {
//     // return view('welcome');
//     // echo 'hello world';
//     if($name){
//         echo 'Welcome ' . $name. ' !';
//     }else{  
//         echo "hello world!";
//     }   
// });
 /* ------------thực hành admin ----------------*/
Route::get('/login', function () {
    
    // echo 'hello world';
    return view('login');
    
}); 

Route::post('/login', function (Illuminate\Http\Request $request) {
   if ($request->username == 'admin'&& $request->password == 'admin')
     {
         return view('welcome_admin');
     }
         return view('login_error');
});
/* ------------bài tập tính chiết khấu ----------------*/


Route::get('/online', function () {

    return view('online');
    
}); 

Route::post('/online', function (Illuminate\Http\Request $request) {
    $Product_Description = $request->product_pescription;
    $List_Price          = $request->list_price;
    $Discount_Percent    = $request->discount_percent; 

    $discount_amount = $List_Price * $Discount_Percent * 0.1;
    return view('show_discount_amount', compact(['discount_amount']));

 });
 /* ------------------bài tập từ điển ------------------------*/


 Route::get('/tu_dien', function () {

    return view('tu_dien');
    
}); 
Route::post('/tu_dien', function (Illuminate\Http\Request $request) {
  $texts = [
                'hello'     =>'xin chào',
                'goodbye'   =>'tạm biệt',
                'student'   =>'học sinh',
                'yes'       => 'đúng',
            ];
    $english = $request->english;
    $vietnam =  $texts[$english];

   return view('dich', compact(['vietnam']));

 });
  /* ------------------luyện tập ------------------------*/

 Route::get('/lession2/{name?}/{age?}', function ($name = "laravel",$age = "18") {
    return "hello ". $name ."<br>". " age " . $age;
})->where(['name','age' => '[0-9]+']);

  /* ------------------luyện tập ------------------------*/

Route::group(['prefix'=>'user'],function (){
    Route::get('/file',function (){
        // return "file page here!";
        return redirect('/login');
    });
    // Route::get('/login',function (){
    //    return "file page here!"; 
    // });
    Route::get('/login',[UserController::class, 'getLogin'])->name('login');
});

/* ------------------thực hành  ------------------------*/

// Route::get('/', function () {
//     echo "<h2>This is Home page</h2>";
// });

// Route::get('/about', function () {
//     echo "<h2>This is About page</h2>";
// });

// Route::get('/contact', function () {
//     echo "<h2>This is Contact page</h2>";
// });

// Route::get('/user', function () {
//     return view('user', ['name'=>'Masud Alam']);
// });

Route::get('/', [HomeController::class, 'index']);

  /* ------------------thực hành lấy múi giờ ------------------------*/
 Route::get('/', function () {
    return view('index');
 }); 

//   Route::get('/{timezone?}', function ($timezone = null) {
//       if (!empty($timezone)) {

//           // Khởi tạo giá trị giờ theo múi giờ UTC
//         $time = new DateTime(date('Y-m-d H:i:s'), new DateTimeZone('UTC'));

//          // Thay đổi về múi giờ được chọn
//          $time->setTimezone(new DateTimeZone(str_replace('-', '/', $timezone)));

//          // Hiển thị giờ theo định dạng mong muốn
//          echo 'Múi giờ bạn chọn ' . $timezone . ' hiện tại đang là: ' . $time->format('d-m-Y H:i:s');
//       }
//       return view('index');
//   });
/* ------------------thực hành Khởi tạo ứng dụng Task Management ------------------------*/

// Route::prefix('customer')->group(function (){
//     Route::get('index',function(){
//         // echo "hiện thị danh sách khách hàng";
//         return view('customers.index');
//     });
//     Route::get('create', function(){
        
//     });
//     Route::post('store', function () {
//         // Xử lý lưu dữ liệu tạo khách hàng thong qua phương thức POST từ form
//     });

//     Route::get('{id}/show', function () {
//         // Hiển thị thông tin chi tiết khách hàng có mã định danh id
//     });

//     Route::get('{id}/edit', function () {
//         // Hiển thị Form chỉnh sửa thông tin khách hàng
//         // return view('customers.index');
//     });

//     Route::patch('{id}/update', function () {
//         // xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form
//     });

//     Route::delete('{id}/destroy', function () {
//         // Xóa thông tin dữ liệu khách hàng
//     });
// });
// /*-------------------------------------luyện tập --------------------------------*/

// Route::get('customer',[App\Http\Controllers\CustomerController::class, 'index']);
Route::prefix('customer')->group(function (){
    
    Route::get('/',[App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');


    Route::get('create',[App\Http\Controllers\CustomerController::class, 'create']);


    Route::post('store',[App\Http\Controllers\CustomerController::class, 'store'])->name('customer.store');


    Route::get('{id}/show',[App\Http\Controllers\CustomerController::class, 'show']);


    Route::get('{id}/edit',[App\Http\Controllers\CustomerController::class, 'edit']);


    Route::patch('{id}/update',[App\Http\Controllers\CustomerController::class, 'update']);


    Route::delete('{id}/destroy',[App\Http\Controllers\CustomerController::class, 'destroy']);

});