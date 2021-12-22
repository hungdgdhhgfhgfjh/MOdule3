@extends("layout.header")
@section("header")
@endsection
<div class="container">
  <h2 class="text-center text-warning" >Quốc gia</h2> 
  <form action="#" method="get">
  <input class="input1" placeholder="search" type="text" name="search">
  <button class="button1" type="submit"><i class="fas fa-search"></i>tìm kiếm</button>
  </form>
  <div class="col-12">
            @if (Session::has('success'))
            <p class="alert-success">
                <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
            </p>
            @endif
        </div>
  <a class="btn btn-primary" href="{{route('countries.create')}}">ADD</a>
  
  <table class="table table-dark">
    <thead>
      <tr>
        <th>id</th>
        <th>tên quốc gia</th>
        <th>edit</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach($countries as $key => $country)
      <tr>
       <td>{{$country->id}}</td>
       <td>{{$country->name}}</td>
       <td><a class="btn btn-primary" href="{{route('countries.edit',$country->id)}}">edit</a></td>
       <form action="{{route('countries.destroy',$country->id)}}"  method="post">
       @csrf
       @method("delete")
       <td><button onclick="return confirm('bạn có muốn xóa không')" class="btn btn-danger" type ="submit">delete</button></td>
       </form>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>