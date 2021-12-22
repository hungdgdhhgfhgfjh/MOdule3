<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Homecontroller extends Controller
{
    public function index()
    {
        $communication_book         = DB::table('books')->where('category_id','=','1')->first();
        $exploration_book           = DB::table('books')->where('category_id','=','2')->first();
        $favorite_book              = DB::table('books')->where('category_id','=','3')->first();
        $think_big_book             = DB::table('books')->where('category_id','=','4')->first();
        $love_book                  = DB::table('books')->where('category_id','=','5')->first();
        $book_people_and_animals    = DB::table('books')->where('category_id','=','6')->first();
        return view('home.home',["communication_book"        =>$communication_book,
                            "exploration_book"          =>$exploration_book,
                            "favorite_book"             =>$favorite_book,
                            "think_big_book"            =>$think_big_book,
                            "love_book"                =>$love_book,
                            "book_people_and_animals"   =>$book_people_and_animals,
        
                                                                                     ]);
    }
    public function booksListing($id)
    {
        $booksListing         = DB::table('books')->where('category_id','=',"$id")->get();
        return view('home.booksListing',["booksListing"=>$booksListing]);
    }
    public function bookDetails($id)
    {
        $bookDetail         = DB::table('books')->where('id','=',"$id")->first();
        $descriptionBook    = DB::table('book_details')->where('book_id','=',"$id")->first();
        $categoryBooks     = DB::table('books')->where('category_id','=',"$bookDetail->category_id")->get();
         return view('home.bookDetails',["bookDetail"=>$bookDetail,
                                    "descriptionBook"=>$descriptionBook,
                                    "categoryBooks"=>$categoryBooks,
         ]);
    }
    public function register()
    {
        return view("home.register");
    }
    public function acctionRegister(Request $request)
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
        $user->level            = "khách hàng";
        $user->status           = 1;
        $user->save();
        Session::flash('success',"đăng kí thành công");
        return redirect()->route('home.register');
    }
    public function login()
    {
        return view("home.login");
    }public function handleLogin(Request $request)
    {
       $loginUsers = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => "Khách hàng",
        ];
        $loginAdmin =
        [
            'email' => $request->email,
            'password' => $request->password,
            'level' => "sếp",
        ];
        if (Auth::attempt($loginUsers)) {
            return redirect()->route('homeUser.index');
        }
        if(Auth::attempt($loginAdmin)) {
            return redirect()->route('users.index');
        } 
        else {
        Session::flash('error_email','email của bạn không tồn tại');
        Session::flash('error_password','mật khẩu của bạn không tồn tại');
            return redirect()->back();
        }
        
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('home.login');
      }
    
}
