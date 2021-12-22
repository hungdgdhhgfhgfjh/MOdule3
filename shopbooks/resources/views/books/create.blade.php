@extends("layoutRegister.header")
@section("header")
@endsection
<h1 class="text-center text-primary">thêm sách</h1>
<div id="content" style="height:300px;">
<div class="container" style="background-color:white;">
<div class="col-4">
<form action="{{route('books.store')}}" method="post">
@csrf
<div class="form-group">
    <label for="email">tên sách</label>
    <input value="{{ old('name_book') }}" name="name_book" type="text" style="width: 316px;" class="form-control" placeholder="Enter name" >
    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('name') }}</b></div>
  </div>
  <div class="form-group">
    <label for="email">giá</label>
    <input value="{{ old('price') }}" name="price" type="text" style="width: 316px;" class="form-control" placeholder="Enter name" >
    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('price') }}</b></div>
  </div>
  <div class="form-group">
    <label for="email">ảnh sách</label>
    <input value="{{ old('image_book') }}" name="image_book" type="text" style="width: 316px;" class="form-control" placeholder="Enter name" >
    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('name') }}</b></div>
  </div>
  <div class="form-group">
    <label for="email">thể loại sách</label>
    <select name="category_id" id="">
    @foreach($categories as $key => $category)
            <option value="{{$key+1}}">{{$category->name_category}}</option>  
    @endforeach
    </select>
  </div>
  <button type="submit" style="width: 316px;" class="btn btn-primary">thêm</button>
</form> 
</div>
</div>
</div>