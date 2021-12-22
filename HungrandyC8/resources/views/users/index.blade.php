@extends("staffs.layout.header")
@section("header")
<h1 class="text-primary text-center" >người dùng</h1>
<div class="col-12">
            @if (Session::has('success'))
            <p style="width:200px" class="alert-success">
            <i class="fas fa-check"></i>{{ Session::get('success') }}
            </p>
            @endif
        </div>
        <nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
<a class="btn btn-primary ml-4" href="{{route('admin.create')}}">thêm người dùng</a>
<a class="btn btn-primary ml-4" href="{{route('admin.login')}}">đăng nhập</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Mã người dùng</th>
      <th scope="col">email</th>
      <th scope="col">họ tên</th>
   
    </tr>
  </thead>
  <tbody>
  @if(count($users)===0)
  <tr>
    <td colspan="7">chưa có nhân viên</td>
    </tr>
    @else
    @foreach($users as $user)
    <tr>
    <td scope="col">{{$user->id}}</td>
      <td scope="col">{{$user->name}}</td>
      <td scope="col">{{$user->email}}</td>
     <td></td>
      <td></td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
@endsection