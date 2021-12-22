<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
  
        $search = (isset($request->search) && !empty($request->search)) ? $request->search: "";
        if($search  == ""){
            $users = User::paginate(4);
        }else{
            $users = DB::table("users")->where("name",'like','%'.$search.'%')->paginate(4);
        }
        $admin     = Auth::user();
        if(!$admin){
            return redirect()->route('home.login');
        }
        return view('users.index',["users" => $users,
                                   "admin" => $admin
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users.create");
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
            'name.required' =>   'bạn chưa nhập tên',
            'email.required'        => 'bạn chưa nhập email',
            'password.required'     => 'bạn chưa nhập mật khẩu',
            'number_phone.required' => 'bạn chưa nhập số điện thoại',
            'address.required'      => 'bạn chưa nhập địa chỉ',
            'email.email'           => 'đó không phải email',
            'email.unique'          => 'Email đã tồn tại',
            'password.min'          => 'mật khẩu của bạn phải trên 8 kí tự',
            'number_phone.unique'   => 'số điện thoại đã tồn tại',  
        ];
        $roles = [
            'name'                  => 'required',
            'email'                 => 'required|email|unique:users',
            'password'              => 'required|min:8',
            'address'               => 'required',
            'number_phone'          => 'required|unique:users',
        ];
        $this->validate($request, $roles,$messages); 
        $user = new User();
        $user->name             = $request->name;
        $user->email            = $request->email;
        $user->password         = Hash::make($request->password);
        $user->number_phone     = $request->number_phone;
        $user->address          = $request->address;
        $user->level            = "sếp";
        $user->status           = 2;
        $user->save();
        Session::flash("success","thêm mới  thành công");
        return redirect()->route('users.index');
       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $admin     = Auth::user();
        if(!$admin){
            return redirect()->route('home.login');
        }
        return view("users.show",["user"=>$user,
                                  "admin"=>$admin
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view("users.edit",["user"=>$user]);
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
            'name.required'         =>   'bạn chưa nhập tên',
            'email.required'        => 'bạn chưa nhập email',
            'password.required'     => 'bạn chưa nhập mật khẩu',
            'number_phone.required' => 'bạn chưa nhập số điện thoại',
            'address.required'      => 'bạn chưa nhập địa chỉ',
            'email.email'           => 'đó không phải email',
            'email.unique'          => 'Email đã tồn tại',
            'password.min'          => 'mật khẩu của bạn phải trên 8 kí tự',
            'number_phone.unique'   => 'số điện thoại đã tồn tại',  
        ];
        $roles = [
            'name'                  => 'required',
            'email'                 => 'required|email|unique:users,email,'.$id,
            'password'              => 'required|min:8',
            'address'               => 'required',
            'number_phone'          => 'required|unique:users,number_phone,'.$id,
        ];
        $this->validate($request, $roles,$messages); 
        $user = User::find($id);
        $user->name             = $request->name;
        $user->email            = $request->email;
        $user->password         = $request->password;
        $user->number_phone     = $request->number_phone;
        $user->address          = $request->address;
        $user->save();
        Session::flash("success","thay đổi  thành công");
        return redirect()->route('users.index');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Session::flash("success","xóa  thành công");
        return redirect()->route('users.index');
    }
}
