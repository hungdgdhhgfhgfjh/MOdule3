<?php

namespace App\Http\Controllers;

use App\Models\Order_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderdetailsController extends Controller
{
    public function index($id)
    {
        $admin     = Auth::user();
        if(!$admin){
            return redirect()->route('home.login');
        }
       $order_details = DB::table('order_details')
       ->join('books', 'books.id', '=', 'order_details.book_id')
       ->select('orders_id','books.name_book','order_details.*','books.image_book')
       ->where('orders_id','=',$id)->get();
       return view('orders.orderDetails.index',['order_details' => $order_details,
                                                'admin'         => $admin
       ]);
    }
    public function edit($id,$orders_id)
    {
        $order_detail = Order_detail::find($id);
        return view('orders.orderDetails.edit',['order_detail'=>$order_detail,
                                                'orders_id' =>$orders_id
        ]);
    }
    public function update(Request $request,$id,$orders_id)
    {
        $messages = [
            'price_each.required'         =>   'bạn chưa  nhập giá tiền của sách',
        ];
        $roles = [
            'price_each'                  => 'required',
        ];
        $this->validate($request, $roles,$messages); 
        $order_detail                   = Order_detail::find($id);
        $order_detail->price_each       = $request->price_each;
        $order_detail->save();
        Session::flash('success','thay đổi thành công');
        return redirect()->route('orderdetails.index',$orders_id);
    }
    public function delete($id)
    {
        $order_detail                   = Order_detail::find($id);
        $order_detail->delete();
        Session::flash("success","xóa  thành công");
        return redirect()->back();
    }
}
