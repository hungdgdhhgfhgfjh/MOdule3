@extends("cart.frontend")
@section("content")
<div class="container">
      <h2 class="text-center text-warning">Giỏ Hàng</h2>
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
  <table class="table table-dark">
    <thead>
      <tr>
        <th>sách</th>
        <th>ảnh</th>
        <th>khách hàng</th>
        <th>giá tiền</th>
        <th>số lượng</th>
      </tr>
    </thead>
    <tbody>
    @foreach($carts as $key => $cart)
    <tr>
    <td>{{$cart->name_book}}</td>
    <td><img style="width:150px;height:250px;" src="{{$cart->image_book}}" alt=""></td>
    <td>{{$cart->name}} <br> <a class="btn btn-primary" href="{{route('users.show',$cart->users_id)}}">xem chi tiết</a></td>
    <td>{{number_format($cart->price)."VNĐ"}}</td>
    <td>{{$cart->quantity}}</td>
    @endforeach
    </tbody>
  </table>
</div>
<div class=" d-flex justify-content-end">
                        {{ $carts->links() }}
                    </div>
</body>
</html>
@endsection