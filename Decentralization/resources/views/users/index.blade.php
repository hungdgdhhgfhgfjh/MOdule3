@include("staffs.layout.frontend")
<h1 class="text-center text-primary"  >Khách hàng</h1>
<div class="col-12">
    @if (Session::has('news'))
    <p style="width:300px" class="alert-success">
      <i class="fas fa-check"></i>{{ Session::get('news') }}
    </p>
    @endif
  </div>
<a class="btn btn-success" href="{{route('user.create')}}">thêm khách hàng</a>
<a class="btn btn-success" href="{{route('staff.index')}}">nhân viên</a>

@if(!$user)
<a class="btn btn-info" href="{{route('login')}}">đăng nhập</a>
@else
<a class="btn btn-info" href="">hi {{$user->name}}</a>
<a class="btn btn-info" href="{{route('logout')}}">đăng xuất</a>
@endif
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
      @if(count($users) ===0 )
      <tr>
          <td>chưa có nhân viên</td>
      </tr>
      @else
      @foreach($users as $Key => $user)
    <tr>
      <th scope="row">{{$Key++}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td><a href="{{route('user.edit',$user->id)}}">edit</a></td>
      <td><a href="{{route('user.delete',$user->id)}}">delete</a></td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>


</body>
</html>