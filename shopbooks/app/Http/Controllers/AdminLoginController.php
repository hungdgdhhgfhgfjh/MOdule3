<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// khai báo sử dụng loginRequest
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginRequest;
use App\User;
class AdminLoginController extends Controller
{
    public function getLogin()
    {
        if (Auth::check()) {
            // nếu đăng nhập thàng công thì 
            return redirect('admincp');
        } else {
            return view('admin.login');
        }

    }

    /**
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    // public function postLogin(loginRequest $request)
    // {
    //     $login = [
    //         'email' => $request->txtEmail,
    //         'password' => $request->txtPassword,
    //         'level' => 1,
    //         'status' => 1
    //     ];
    //     if (Auth::attempt($login)) {
    //         return redirect('admincp');
    //     } else {
    //         return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
    //     }
    // }
}
