@extends("categories.layout.frontend")
@section("content")
<div class="container">
      <h2 class="text-center text-warning">Danh Mục Sách</h2>
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
    </div>
  </form>
<a class="btn btn-primary" href="{{route('categories.create')}}">thêm thể loại</a>
  <table class="table table-dark">
    <thead>
      <tr>
      <th>STT</th>
        <th>thể loại</th>
        <th>thay đổi</th>
        <th>xóa</th>
      </tr>
    </thead>
    <tbody>
    @foreach($categories as $key => $category)
    <tr>
    <td>{{$category->id}}</td>
    <td>{{$category->name_category}}</td>
    <td><a class="btn btn-primary" href="{{route('categories.edit', $category->id)}}"><i class="fas fa-tools"></i></a></td>
    <form action="{{route('categories.destroy', $category->id)}}" method="post">
    @csrf
    @method("delete")
    <td><button class="btn btn-danger" onclick="return confirm('bạn có muốn xóa không')"href="{{route('categories.destroy', $category->id)}}"><i class="fas fa-trash-alt"></i></button ></td>
    </tr>
    </form>
    @endforeach
    </tbody>
  </table>
</div>
<div class=" d-flex justify-content-end">
                        {{ $categories->links() }}
                    </div>
</body>
</html>
@endsection