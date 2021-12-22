@extends("staffs.layout.header")
@section("header")
<h1 class="text-primary text-center" >Nhân viên</h1>
<div class="col-12">
            @if (Session::has('success'))
            <p style="width:200px" class="alert-success">
            <i class="fas fa-check"></i>{{ Session::get('success') }}
            </p>
            @endif
        </div>
        <nav class="navbar navbar-light bg-light">
  <form class="form-inline" action="#" method="get">
    <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
<a class="btn btn-primary ml-4" href="{{route('staffs.create')}}">thêm nhân viên</a>
<a   class="btn btn-primary ml-4" href="{{route('admin.logout')}}">đăng xuất</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Mã nhân viên</th>
      <th scope="col">Nhóm nhân viên</th>
      <th scope="col">Họ tên</th>
      <th scope="col">Giới tính</th>
      <th scope="col">Số điện thoại</th>
      <th scope="col">thay đổi</th>
      <th scope="col">xóa</th>
    </tr>
  </thead>
  <tbody>
  @if(count($staffs)===0)
  <tr>
    <td colspan="7">chưa có nhân viên</td>
    </tr>
    @else
    @foreach($staffs as $staff)
    <tr>
    <td scope="col">{{$staff->id}}</td>
      <td scope="col">{{$staff->Staff_group}}</td>
      <td scope="col">{{$staff->Full_name}}</td>
      <td scope="col">{{$staff->Sex}}</td>
      <td scope="col">{{$staff->Phone_number}}</td>
      <td scope="col"><a class="btn btn-primary" href="{{route('staffs.edit',$staff->id)}}">thay đổi</a> </td>
      <form action="{{route('staffs.destroy',$staff->id)}}" method="POST" >
      @csrf
      @method("delete")
      <td scope="col"><button onclick="return confirm('bạn có muốn xóa không')" class="btn btn-danger" >xóa</button> </td>
      </form>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
@endsection