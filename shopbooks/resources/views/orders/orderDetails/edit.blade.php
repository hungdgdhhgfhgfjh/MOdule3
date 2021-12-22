@extends("layoutRegister.header")
@section("header")
@endsection
<h1 class="text-center text-primary">thay đổi</h1>
<div id="content" style="height:232px;">
<div class="container" style="background-color:white;">
<div class="col-4">
<form action="{{route('orderdetails.update',[$order_detail->id,$orders_id])}}" method="post">
@csrf
  <div class="form-group">
    <label for="email">tiền</label>
    <input value="{{ $order_detail->price_each }}" name="price_each" type="text" style="width: 316px;" class="form-control" placeholder="Enter name" >
    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('price_each') }}</b></div>
  </div>
  <button type="submit" style="width: 316px;" class="btn btn-primary">thay đổi</button>
</form> 
</div>
</div>
</div>