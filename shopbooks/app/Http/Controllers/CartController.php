<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $admin     = Auth::user();
        if(!$admin){
            return redirect()->route('home.login');
        }
        $search = (isset($request->search) && !empty($request->search)) ? $request->search :"";
            if($search == ""){
        $carts     = DB::table('carts')
        ->join('users','users.id', '=','carts.user_id')
        ->join('books','books.id', '=','carts.book_id')
        ->select('users.id as users_id','users.email','users.name','carts.id','books.name_book','books.image_book','carts.price',DB::raw('(carts.price * carts.quantity) as totalPrice'),'carts.quantity')
        ->paginate(5);
        } else{
        $carts     = DB::table('carts')
        ->join('users','users.id', '=','carts.user_id')
        ->join('books','books.id', '=','carts.book_id')
        ->select('users.id as users_id','users.email','users.name','carts.id','books.name_book','books.image_book','carts.price',DB::raw('(carts.price * carts.quantity) as totalPrice'),'carts.quantity')
        ->where('users.name','like','%'.$search.'%')
        ->paginate(5);
        }
    
        return view('cart.index',["carts"=>$carts,
                                    "admin"=>$admin
                                                    ]);
    }
}
