<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $admin     = Auth::user();
        if(!$admin){
            return redirect()->route('home.login');
        }
            $search = (isset($request->search) && !empty($request->search)) ? $request->search :"";
            if($search == ""){
                $categories = Category::paginate(5);
            } else{
                $categories= DB::table("categories")->where("name_category",'like','%'.$search.'%')->paginate(5);
            }
                
                return view('categories.index',["categories" =>$categories,
                                                 "admin" =>$admin
                                                                            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("categories.create");
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
            'name_Category.required' =>   'bạn chưa nhập tên',
            'name_Category.unique' =>   'thể loại đã tồn tại',
        ];
        $roles = [
            'name_Category'                  => 'required|unique:categories,name_Category',
        ];
        $this->validate($request, $roles,$messages); 
        $Category = new Category;
        $Category->name_category             = $request->name_category;
        $Category->save();
        Session::flash("success","thêm mới  thành công");
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Category = Category::find($id);
        return view("categories.edit",["Category"=>$Category]);
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
            'name_Category.required' =>   'bạn chưa nhập tên',
            'name_Category.unique' =>   'thể loại đã tồn tại',
        ];
        $roles = [
            'name_Category'                  => 'required|unique:categories,name_Category,'.$id,
        ];
        $this->validate($request, $roles,$messages); 
        $Category = Category::find($id);
        $Category->name_Category             = $request->name_Category;
        $Category->save();
        Session::flash("success","thay đổi  thành công");
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Category =  Category::find($id);

        $Category->delete();
        Session::flash("success","xóa  thành công");
        return redirect()->route('categories.index');
    }
}
