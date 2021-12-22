<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        
    }
    public function index(){

        //tao mang khach hang
        $customers = [
            '0' => [
                'id'  => 1,
                'name'=> 'customer1',
                'bod' => '1998-09-01',
                'email' => 'customer1@gmail.com'
            ],
      
            '1' => [
                'id'  => 2,
                'name'=> 'customer2',
                'bod' => '1998-09-01',
                'email' => 'customer2@gmail.com'
            ],
      
            '2' => [
                'id'  => 3,
                'name'=> 'customer3',
                'bod' => '1998-09-01',
                'email' => 'customer3@gmail.com'
            ]
        ];
      
        //goi view va truyen du lieu sang view
        return view('customer.list',  [ 'customers' => $customers ]);
      }
    // lấy ra một chuyên mục theo id
    public function getProduct($id)
    {
        return  view('product/edit');
    }
    public function update($id)
    {
        return "submit sửa chuyên mục id";
    }
    public function getAdd()
    {
        return  view('product/add');
    }
    public function handgetAdd()
    {
        return "đây là thêm";
    }
    public function detroy($id)
    {
        return "đây là detroy";
    }
    public function showproduct()
    {
        
    }
}
