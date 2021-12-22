<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $staffs = Staff::all();
        $search = (isset($request->search) && !empty($request->search)) ? $request->search: "";
        if($search  == ""){
            $staffs = Staff::all();
        }else{
            $staffs = DB::table("staffs")->where("Full_name",'like','%'.$search.'%')->get();
        }
        return view('staffs.index',["staffs"=>$staffs]);
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("staffs.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'Full_name.required'            =>   'bạn chưa nhập tên',
            'Staff_group.required'          => 'bạn chưa nhập nhóm nhân viên',
            'Sex.required'                  => 'bạn chưa nhập giới tính',
            'Phone_number.required'         => 'bạn chưa nhập số điện thoại',
        ];
        $roles = [
            'Full_name'                     => 'required',
            'Staff_group'                   => 'required',
            'Sex'                           => 'required',
            'Phone_number'                  => 'required',
        ];
        $this->validate($request, $roles,$messages); 
        $staff = new Staff();
        $staff->Full_name               = $request->Full_name;
        $staff->Staff_group             = $request->Staff_group;
        $staff->Sex                     = $request->Sex;
        $staff->Phone_number            = $request->Phone_number;
        
        $staff->save();
        Session::flash("success","thêm mới  thành công");
        return redirect()->route('staffs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = Staff::find($id);
        
        return view("staffs.edit",["staff" => $staff]);
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
        $messages = [
            'Full_name.required'            =>   'bạn chưa nhập tên',
            'Staff_group.required'          => 'bạn chưa nhập nhóm nhân viên',
            'Sex.required'                  => 'bạn chưa nhập giới tính',
            'Phone_number.required'         => 'bạn chưa nhập số điện thoại',
        ];
        $roles = [
            'Full_name'                     => 'required',
            'Staff_group'                   => 'required',
            'Sex'                           => 'required',
            'Phone_number'                  => 'required',
        ];
        $this->validate($request, $roles,$messages); 
        $staff                          = Staff::find($id);
        $staff->Full_name               = $request->Full_name;
        $staff->Staff_group             = $request->Staff_group;
        $staff->Sex                     = $request->Sex;
        $staff->Phone_number            = $request->Phone_number;
        $staff->save();
        Session::flash("success","thay đổi  thành công");
        return redirect()->route('staffs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff                          = Staff::find($id);
        $staff->delete();
        Session::flash("success","xóa  thành công");
        return redirect()->route('staffs.index');
    }
}
