@include("staffs.layout.frontend")
<h1 class="text-center text-primary">Nhân viên</h1>
<div class="col-12">
    @if (Session::has('news'))
    <p style="width:300px" class="alert-success">
      <i class="fas fa-check"></i>{{ Session::get('news') }}
    </p>
    @endif
  </div>
<a class="btn btn-success" href="{{route('staff.create')}}">thêm nhân viên</a>
<a class="btn btn-info" href="{{route('user.index')}}">khách hàng</a>
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
            <th scope="col">position</th>
            <th scope="col">numberPhone</th>
            <th scope="col">edit</th>
            <th scope="col">delete</th>
        </tr>
    </thead>
    <tbody>
        @if(count($staffs) ===0 )
        <tr>
            <td>chưa có nhân viên</td>
        </tr>
        @else
        @foreach($staffs as $Key => $staff)
        <tr>
            <th scope="row">{{$Key++}}</th>
            <td>{{$staff->name}}</td>
            <td>{{$staff->email}}</td>
            <td>{{$staff->position}}</td>
            <td>{{$staff->numberPhone}}</td>
            <td><a href="{{route('staff.edit',$staff->id)}}">edit</a></td>
            <td><a href="{{route('staff.delete',$staff->id)}}">delete</a></td>
            <td>{{$staff->delete}}</td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>


</body>

</html>