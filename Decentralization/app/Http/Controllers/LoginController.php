<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
       return view("login");
    }
    public function handleLogin(Request $request)
    {
        $loginUsers = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $loginStaffs =
        [
            'email'    => $request->email,
            'password' => $request->password,
            'position' => "nhân viên",
        ];
        $loginLeader =
        [
            'email' => $request->email,
            'password' => $request->password,
            'position' => "Giám đốc",
        ];

        if (Auth::attempt($loginUsers)){
            return redirect()->route('user.index');
        }
    //    var_dump(Auth::guard('staffs')->attempt($loginLeader));
    //     dd(Auth::guard('staffs')->user());
        if(Auth::guard('staffs')->attempt($loginStaffs)) {
            return redirect()->route('staff.index');
        } 
        if(Auth::guard('staffs')->attempt($loginLeader)) {
            return redirect()->route('staff.index');
        } 
       
        // else {
        // Session::flash('error_email','email của bạn không tồn tại');
        // Session::flash('error_password','mật khẩu của bạn không tồn tại');
        //     return redirect()->back();
        // }
    }
    public function logout(Request $request) {
        Auth::logout();
        Auth::guard('staffs')->logout();

        return redirect('/login');
      }
}
