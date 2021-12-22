@extends("layoutRegister.header")
@section("header")
@endsection
<h1 class="text-center text-primary">thay đổi</h1>
<div id="content" style="height:500px;">
<div class="container" style="background-color:white;">
<div class="col-4">
<form action="{{route('books.update',$book->id)}}" method="post">
@csrf
@method("put")
<div class="form-group">
    <label for="email">tên sách</label>
    <input value="{{ $book->name_book }}" name="name_book" type="text" style="width: 316px;" class="form-control" placeholder="Enter name" >
    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('name') }}</b></div>
  </div>
  <div class="form-group">
    <label for="email">giá</label>
    <input value="{{ $book->price }}" name="price" type="text" style="width: 316px;" class="form-control" placeholder="Enter name" >
    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('price') }}</b></div>
  </div>
  <div class="form-group">
    <label for="email">ảnh sách</label>
    <img width="150px" height="150px" src="{{  $book->image_book }}" alt="">
    <input value="{{  $book->image_book }}" name="image_book" type="text" style="width: 316px;" class="form-control" placeholder="Enter name" >
    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('name') }}</b></div>
  </div>
  <div class="form-group">
  <label for="email">thể loại sách</label>
    <select name="category_id" id="">
    <option value="{{$category_id->id}}">{{$findName_category->name_category}}</option>
    @foreach($categories as $key => $category)
            <option value="{{$key+1}}">{{$category->name_category}}</option>  
    @endforeach
    </select>
  </div>
  <button type="submit" style="width: 316px;" class="btn btn-primary">thay đổi</button>
</form> 
</div>
</div>
</div>