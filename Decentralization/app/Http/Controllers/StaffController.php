<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    public function index()
    {
        echo __METHOD__;
        $staffs = Staff::all();
         $user = Auth::guard('staffs')->user();
         if(!$user){
            $user = Auth::user();
        }
        return view("staffs.index",["staffs" => $staffs,
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
        return view("staffs.create");
    }
    public function store(Request $request)
    {
        $staff              = new Staff();
        $staff->name        = $request->name;
        $staff->email       = $request->email;
        $staff->password    = Hash::make($request->password);
        $staff->position    = "nhân viên";
        $staff->numberPhone = $request->numberPhone;
        $staff->save();
        return redirect()->route("staff.index");
        // echo __METHOD__;

    }
    public function edit($id)
    {
        echo __METHOD__;
        $staff = Staff::find($id);
        return view("staffs.edit",["staff" => $staff ]);
        
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
