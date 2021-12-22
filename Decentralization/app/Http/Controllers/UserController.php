<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        echo __METHOD__;
        $users = User::all();
        $user = Auth::guard('staffs')->user();
        if(!$user){
            $user = Auth::user();
        }
        return view("users.index",["users" => $users,
                                   "user" => $user,
        ] );
    }
    public function show()
    {
        echo __METHOD__;
    }
    public function create()
    {
        echo __METHOD__;
        return view("users.create");
    }
    public function store(Request $request)
    {
    
        echo __METHOD__;
        $user              = new User();
        $user->name        = $request->name;
        $user->email       = $request->email;
        $user->password    = Hash::make($request->password);
        $user->save();
        return redirect()->route("user.index");
        // echo __METHOD__;

    }
    public function edit($id)
    {
        echo __METHOD__;
       
    
        
    }
    public function update()
    {
        echo __METHOD__;
    }
    public function delete($id)
    {
        echo __METHOD__;
            
    }
}
