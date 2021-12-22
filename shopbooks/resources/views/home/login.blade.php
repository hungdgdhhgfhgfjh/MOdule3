@extends("layoutRegister.header")
@section("header")
@endsection
<h1 class="text-center text-primary">Đăng Nhập</h1>
<div id="content" style="height: 250px;" >
<div class="container" style="background-color:white; border-radius:10px;">
<div class="col-4">
<form action="{{route('home.handleLogin')}}" method="post">
@csrf
  <div class="form-group">
    <label for="email">Email:</label>
    <input value="{{ old('email') }}" name="email" type="email" style="width: 316px;" class="form-control" placeholder="Enter email" >
    <div class="col-12">
            @if (Session::has('error_email'))
            <p style="width:360px" class="alert-danger">
                <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('error_email') }}
            </p>
            @endif
        </div>
  </div>
  <div class="form-group">
    <label for="pwd">Mật khẩu:</label>
    <input value="{{ old('password') }}" name="password" type="password" style="width: 316px;" class="form-control" placeholder="Enter password">
    <div class="col-12">
            @if (Session::has('error_password'))
            <p style="width:250px" class="alert-danger">
                <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('error_password') }}
            </p>
            @endif
        </div>
  </div>
  <a class="btn btn-success" href="{{route('home.register')}}">đăng ký</a>
  <button type="submit" style="width: 316px;" class="btn btn-primary">Đăng Nhập</button>
</form> 
</div>
</div>
</div>