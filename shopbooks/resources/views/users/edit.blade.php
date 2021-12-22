@extends("layoutRegister.header")
@section("header")
@endsection
<h1 class="text-center text-primary">Update</h1>
<div id="content">
<div class="container" style="background-color:white;">
<div class="col-4">
<form action="{{route('users.update',$user->id)}}" method="post">
@csrf
@method("put")
<div class="form-group">
    <label for="email">họ và tên</label>
    <input value="{{ $user->name }}" name="name" type="text" style="width: 316px;" class="form-control" placeholder="Enter name" >
    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('name') }}</b></div>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input value="{{ $user->email }}" name="email" type="email" style="width: 316px;" class="form-control" placeholder="Enter email" >
    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('email') }}</b></div>
  </div>
  <div class="form-group">
    <label for="pwd">mật khẩu:</label>
    <input value="{{ $user->password }}" name="password" type="password" style="width: 316px;" class="form-control" placeholder="Enter password">
    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('password') }}</b></div>
  </div>
  <div class="form-group">
    <label for="pwd">điện thoại:</label>
    <input value="{{ $user->number_phone }}" name="number_phone" type="text" style="width: 316px;" class="form-control" placeholder="Số điện thoại">
    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('number_phone') }}</b></div>
  </div>
  <div class="form-group">
    <label for="pwd">Địa chỉ:</label>
    <input value="{{ $user->address }}" name="address" type="text" style="width: 316px;" class="form-control" placeholder="Địa chỉ">
    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('address') }}</b></div>
  </div>
  <button type="submit" style="width: 316px;" class="btn btn-primary">Update</button>
</form> 
</div>
</div>
</div>