<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $admin     = Auth::user();
        if(!$admin){
            return redirect()->route('home.login');
        }
        $search = (isset($request->search) && !empty($request->search)) ? $request->search :"";
        if($search == ""){
            $orders = DB::table('orders')
            ->join('users', 'users.id', '=', 'orders.user_id')
            ->select('orders.*','users.name')
            ->orderBy("orders.id",'DESC')
            ->paginate(4);
        } else{
            $orders = DB::table('orders')
        ->join('users', 'users.id', '=', 'orders.user_id')
        ->select('orders.*','users.name')
        ->orderBy("orders.id",'DESC')
        ->where('users.name','like','%'.$search.'%')
        ->paginate(4);
        }
       
        return view('orders.index',["orders"=>$orders,
                                    "admin"=>$admin
        ]);

    }
    public function edit($id)
    {   
        $order = Order::find($id); 
     return view('orders.edit',['order'=>$order]);
    }
    public function destroy($id)
    {
        $order                   = Order::find($id);
        $order->delete();                   
        Session::flash('success','xóa thành công');
        return redirect()->route('order.index');
    }
    public function update($id,Request $request)
    {
        $messages = [
            'status.required'         =>   'bạn chưa  nhập trạng thái',
            'totalPrice.required'   =>   'bạn chưa nhập tổng tiền',
          
        ];
        $roles = [
            'status'                  => 'required',
            'totalPrice'              => 'required',
            
        ];
        $this->validate($request, $roles,$messages); 
        $order                   = Order::find($id);
        $order->status           = $request->status;
        $order->totalPrice       = $request->totalPrice;
        $order->save();
        Session::flash('success','thay đổi thành công');
        return redirect()->route('order.index');
    }
   
}
