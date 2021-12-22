@extends("layoutRegister.header")
@section("header")
@endsection
<h1 class="text-center text-primary">thêm thể loại</h1>
<div id="content" style="height:154px;">
<div class="container" style="background-color:white;">
<div class="col-4">
<form action="{{route('categories.store')}}" method="post">
@csrf
<div class="form-group">
    <label for="email">tên thể loại</label>
    <input value="{{ old('name') }}" name="name_category" type="text" style="width: 316px;" class="form-control" placeholder="Enter name" >
    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('name') }}</b></div>
  </div>
  <button type="submit" style="width: 316px;" class="btn btn-primary">thêm</button>
</form> 
</div>
</div>
</div>