@extends("layoutRegister.header")
@section("header")
@endsection
<h1 class="text-center text-primary">thay đổi</h1>
<div id="content" style="height:154px;">
<div class="container" style="background-color:white;">
<div class="col-4">
<form action="{{route('categories.update',$Category->id)}}" method="post">
@csrf
@method("put")
<div class="form-group">
    <label for="email">tên thể loại</label>
    <input value="{{$Category->name_category}}" name="name_Category" type="text" style="width: 316px;" class="form-control" >
    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('name') }}</b></div>
  </div>
  <button type="submit" style="width: 316px;" class="btn btn-primary">thay đổi</button>
</form> 
</div>
</div>
</div>