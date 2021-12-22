@extends("books.layout.frontend")
@section("content")
<div class="container">
  <h2 class="text-center text-warning">Sách</h2>
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

  <a class="btn btn-primary" href="{{route('books.create')}}">Thêm Sách</a>
  <table class="table table-dark">
    <thead>
      <tr>
        <th>STT</th>
        <th>Sách</th>
        <th>Thể loại</th>
        <th>Ảnh</th>
        <th>giá</th>
        <th>Thay đổi</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      @foreach($books as $key => $book)
      <tr>
        <td>{{$book->id}}</td>
        <td>{{$book->name_book}}</td>
        <td>{{$book->name_category }}</td>
        <td><img width="150px" height="150px" src="{{$book->image_book }}" alt=""></td>
        <td>{{number_format($book->price)."VNĐ"}}</td>
        <td><a class="btn btn-primary" href="{{route('books.edit', $book->id)}}"><i class="fas fa-tools"></i></a></td>
        <form action="{{route('books.destroy', $book->id)}}" method="post">
          @csrf
          @method("delete")
          <td><button class="btn btn-danger" onclick="return confirm('bạn có muốn xóa không')" href="{{route('books.destroy', $book->id)}}"><i class="fas fa-trash-alt"></i></button></td>
      </tr>
      </form>
      @endforeach
    </tbody>
  </table>
</div>
<div class=" d-flex justify-content-end">
  {{ $books->links() }}
</div>
</body>

</html>
@endsection