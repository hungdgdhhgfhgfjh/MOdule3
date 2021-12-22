<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeController extends Controller
{
  public function index()
  {
     echo "<h1 style='color:green;backgroud-color:red;'> MakeController index </h1>";
  }
  function validationEmail(Request $request)
  {
      // Lấy dữ liệu Email từ URL
      $email = $request->email;

      $isEmail = true;

      // Kiểm tra validate email theo hàm mặc định thư viện PHP
      if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $isEmail = false;
      }

      return view('index', compact('isEmail'));
  }
  public function caculator()
  {
    return view('caculator');
      
    
  }
}
