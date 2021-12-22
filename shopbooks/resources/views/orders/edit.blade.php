@extends("layoutRegister.header")
@section("header")
@endsection
<h1 class="text-center text-primary">thay đổi</h1>
<div id="content" style="height:232px;">
<div class="container" style="background-color:white;">
<div class="col-4">
<form action="{{route('order.update',$order->id)}}" method="post">
@csrf
<div class="form-group">
    <label for="email">trạng thái</label>
    <input value="{{ $order->status }}" name="status" type="text" style="width: 316px;" class="form-control" placeholder="Enter name" >
    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('status') }}</b></div>
  </div>
  <div class="form-group">
    <label for="email">tổng tiền</label>
    <input value="{{ $order->totalPrice }}" name="totalPrice" type="text" style="width: 316px;" class="form-control" placeholder="Enter name" >
    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('totalPrice') }}</b></div>
  </div>
  <button type="submit" style="width: 316px;" class="btn btn-primary">thay đổi</button>
</form> 
</div>
</div>
</div>