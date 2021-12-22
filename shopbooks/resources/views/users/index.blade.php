@extends("layout.frontend")
@section("content")
<div class="container">
  <h2 class="text-center text-warning">Khách Hàng</h2>
  <div class="col-12">
    @if (Session::has('success'))
    <p style="width:200px" class="alert-success">
      <i class="fas fa-check"></i>{{ Session::get('success') }}
    </p>
    @endif
  </div>
  <form action="#" method="get">
    @csrf
    <div class="input-group">
      <div class="form-outline">
        <input placeholder="tìm kiếm" type="text" name="search" id="form1" class="form-control" />
      </div>
      <button class="btn btn-primary">
        <i class="fas fa-search"></i>
      </button>
  </form>

</div>

<a class="btn btn-primary" href="{{route('users.create')}}">thêm nhân viên</a>
<table class="table table-dark">
  <thead>
    <tr>
      <th>tên</th>
      <th>tin nhắn</th>
      <th>email</th>
      <th>địa chỉ</th>
      <th>số điện thoại</th>
      <th>cấp độ</th>
      <th>thay đổi</th>
      <th>xóa</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $key => $user)
    <tr>
      <td>{{$user->name}}</td>
      <td><a class="btn btn-success" href="{{route('supportUser.index',$user->id)}}">tin nhắn</a></td>
      <td>{{$user->email}}</td>
      <td>{{$user->address}}</td>
      <td>{{$user->number_phone}}</td>
      <td>{{$user->level}}</td>
      <td><a class="btn btn-primary" href="{{route('users.edit', $user->id)}}"><i class="fas fa-tools"></i></a></td>
      <form action="{{route('users.destroy', $user->id)}}">
        @csrf
        @method("delete")
        <td><button class="btn btn-danger" onclick="return confirm('bạn có muốn xóa không')"><i class="fas fa-trash-alt"></i></button></td>
      </form>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<div class=" d-flex justify-content-end">
  {{ $users->links() }}
</div>
</body>

</html>
@endsection