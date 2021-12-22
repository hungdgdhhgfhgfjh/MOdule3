<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = (isset($request->search) && !empty($request->search)) ? $request->search: "";
        $admin     = Auth::user();
        if(!$admin){
            return redirect()->route('home.login');
        }
        if($search  == ""){
            $books =  DB::table('books')
            ->join('categories', 'books.category_id', '=', 'categories.id')
            ->select('books.*','name_category')
            ->paginate(5);
        }else{
            $books =  DB::table('books')
            ->join('categories', 'books.category_id', '=', 'categories.id')
            ->where('name_book','like','%'.$search.'%')
            ->select('books.*','name_category')
            ->paginate(5);
        }
        $admin     = Auth::user();
        if(!$admin){
            return redirect()->route('home.login');
        }
        return view('books.index',["books"  => $books,
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
        $categories = Category::all();
        return view('books.create',["categories"=>$categories]);
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
            'name_book.required'          => 'bạn chưa nhập tên sách',
            'image_book.required'         => 'bạn chưa nhập ảnh của sách',
            'category_id.required'        => 'bạn chưa nhập thể loại của sách',
            'price.required'              => 'bạn chưa nhập giá tiền',
        ];
        $roles = [
            'price'                     =>"required",
            'name_book'                  => 'required|unique:books',
            'image_book'                 => 'required',
            'category_id'                => 'required',
        ];
        $this->validate($request, $roles,$messages); 
        $book                   = new Book();
        $book->name_book        = $request->name_book;
        $book->image_book       = $request->image_book;
        $book->category_id      = $request->category_id;
        $book->price      = $request->price;
        $book->save();
        Session::flash("success","thêm sách  thành công");
        return redirect()->route('books.index');
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
        $categories = Category::all();
        $book = DB::table('books')
        ->join('categories', 'books.category_id', '=', 'categories.id')
        ->select('books.id', 'name_book', 'category_id','image_book','name_Category','price')->where('books.id','=',"$id")
        ->first();
        $category_id = DB::table('books')->where('category_id','=',$book->category_id)->first();
        $findName_category = DB::table('categories')->where('id','=',"$book->category_id")->first();
        // echo "<pre>";
        // print_r( $category);
        // echo "</pre>";
        // echo "<pre>";
        // print_r( $category_id);
        // echo "</pre>";
        return view('books.edit',["book"       => $book,
                                  "categories" =>$categories,
                                  "findName_category"=>$findName_category,
                                  "category_id"=>$category_id,
        ]);
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
            'name_book.required'          => 'bạn chưa nhập tên sách',
            'image_book.required'         => 'bạn chưa nhập ảnh của sách',
            'category_id.required'        => 'bạn chưa nhập thể loại của sách',
            'price.required'              => 'bạn chưa nhập giá tiền',
        ];
        $roles = [
            'price'                      =>"required",
            'name_book'                  => 'required',
            'image_book'                 => 'required',
            'category_id'                => 'required',
            
        ];
        $this->validate($request, $roles,$messages); 
        $book                   = Book::find($id);
        $book->name_book        = $request->name_book;
        $book->image_book       = $request->image_book;
        $book->category_id      = $request->category_id;
        $book->price            = $request->price;
        $book->save();
        Session::flash("success","thay đổi  thành công");
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        Session::flash("success","xóa thành công");
        return redirect()->route('books.index');
    }
}
