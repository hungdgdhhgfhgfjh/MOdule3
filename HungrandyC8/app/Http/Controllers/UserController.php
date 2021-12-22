<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view("users.index", ["users" => $users]);
    }
    public function create()
    {
        return view("users.create");
    }
    public function store(Request $request)
    {
        $messages = [
            'name.required'         =>   'bạn chưa nhập tên',
            'email.required'        => 'bạn chưa nhập email',
            'password.required'     => 'bạn chưa nhập mật khẩu',
            'email.email'           => 'đó không phải email',
            'email.unique'          => 'Email đã tồn tại',
            'password.min'          => 'mật khẩu của bạn phải trên 8 kí tự',
        ];
        $roles = [
            'name'                  => 'required',
            'email'                 => 'required|email|unique:users',
            'password'              => 'required|min:8',
        ];
        $this->validate($request, $roles, $messages);
        $user = new User();
        $user->name               = $request->name;
        $user->email              = $request->email;
        $user->password           = Hash::make($request->password);
        $user->save();
        Session::flash("success", "thêm mới  thành công");
        return redirect()->route('admin.index');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
    public function login()
    {
        return view('login');
    }
    public function handleLogin(Request $request)
    {
        $loginUsers = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($loginUsers)) {
            return redirect()->route('staffs.index');
        } else {
            Session::flash('error_email', 'email của bạn không tồn tại');
            Session::flash('error_password', 'mật khẩu của bạn không tồn tại');
            return redirect()->back();
        }
    }
    public function edit()
    {
        return view("users.create");
    }
    public function update()
    {
        return view("users.create");
    }
    public function delete()
    {
        return view("users.create");
    }
}
