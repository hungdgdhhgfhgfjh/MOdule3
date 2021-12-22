@extends("staffs.layout.header")
@section("header")

<div class="container">
<h1 class="text-primary">thêm người dùng</h1>
    <div class="row">
        <div class="col-4">
            <form action="{{route('admin.store')}}" method="POST" >
            @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">tên người</label>
                    <input type="text" class="form-control"  name="name">
                    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('name') }}</b></div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">email</label>
                    <input type="email" name="email" class="form-control" >
                    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('email') }}</b></div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">password</label>
                    <input type="password" name="password" class="form-control" >
                    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('password') }}</b></div>
                </div>
                <button type="submit" class="btn btn-primary">thêm</button>
            </form>
        </div>
    </div>
</div>
@endsection