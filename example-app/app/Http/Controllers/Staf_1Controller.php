<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff_1;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session ;

class Staf_1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        $search = (isset($request->search)   && !empty($request->search) ) ? $request->search:"";
        // $user = Staff_1::where('name_staff', "hung")->get();
        // dd($user);
    //    $sql = "SELECT * from staff_1 where name_staff like '%"$search"%'";
    if( $search){
        $staff_1 = DB::table("Staff_1")->where("name_staff","like" ,"%".$search."%")->get();
       
    }else{
    $staff_1 = Staff_1::all();
       
    }
    return view('staff.index',["Staff_1" => $staff_1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("staff.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Staff_1::create($request->only('name_staff','position'));
        return redirect()->route('staff.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $staff = DB::table("Staff_1")->where("id","$id")->first();
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = DB::table("Staff_1")->where("id","$id")->first();
        return view("staff.edit",["staff"  => $staff]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        if($request->name_staff == "" || $request->position == "")
        {
            Session::flash('error_position', 'mời bạn nhập lại Position không được để trống');
            Session::flash('error_name_staff', 'mời bạn nhập lại Name Staff không được để trống');
            return redirect()->route('staff.edit',$id);
        }
        else {
        $staff_1 = Staff_1::find($id)->update($request->only('name_staff','position'));
        return redirect()->route('staff.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Staff_1 = Staff_1::find($id);
        $Staff_1->delete();
        echo  __METHOD__;
        return redirect()->route('staff.index');
    }
}




//kết nối models tạo dữ liệu-> quay lại index
       // Customers::create($request->only('name','age','gender'));
        //redirect điều hướng quay lại trang index
     //   return redirect()->route('customers.index');

// class Staff_1Controller extends Controller
// {
//     public function add()
//     {
//         $staff_1                = new Staff_1();
//         $staff_1->name_staff    =   "Hạnh đẹp trai";
//         $staff_1->position      =   "PHP BACKEND JUNIOR";
//         $staff_1->save();
//         return view('staff.index');
//     }
//     public function index()
//     {
//         $Staff_1    = Staff_1::all();
//         return view('staff.index',["Staff_1"=>$Staff_1]);
        
//     }
//     public function delete($id)
//     {
//         $Staff_1 = Staff_1::find($id);
//         $Staff_1->delete();
//         return  redirect()->route("staff.index");
//     }
//     public function update($id,$request)
//     {
//         $Staff_1                = Staff_1::find($id);
//         $staff_1                = new Staff_1();
//         $staff_1->name_staff    = "Hạnh đẹp trai";
//         $staff_1->position      = "PHP BACKEND JUNIOR";
//         $staff_1->save();
//         return view('index');
//     }
//     public function FunctionName()
//     {
       
//     }
// }
