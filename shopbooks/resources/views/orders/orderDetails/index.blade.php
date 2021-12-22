@extends("orders.layout.frontend")
@section("content")
<div class="container">
      <h2 class="text-center text-warning">Chi Tiết Đơn Hàng</h2>
      <div class="col-12">
            @if (Session::has('success'))
            <p style="width:200px" class="alert-success">
            <i class="fas fa-check"></i>{{ Session::get('success') }}
            </p>
            @endif
        </div>
  <table class="table table-dark">
    <thead>
      <tr>
        <th>Sách</th>
        <th>Ảnh</th>
        <th>Giá tiền</th>
        <th>Số lượng</th>
        <th>Thay đổi</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
    @foreach($order_details as $key => $order_detail)
    <tr>
    <td>{{$order_detail->name_book}}</td>
    <td><img style="width:150px;height:250px;" src="{{$order_detail->image_book}}" alt=""></td>
    <td>{{number_format($order_detail->price_each)."VNĐ"}}</td>
    <td>{{$order_detail->quantity}}</td>
    <td><a class="btn btn-primary"href="{{route('orderdetails.edit',[$order_detail->id,$order_detail->orders_id])}}"><i class="fas fa-tools"></i></a></td>
    <td><a onclick="return confirm('bạn có muốn xóa không')" class="btn btn-danger" href="{{route('orderdetails.delete',$order_detail->id)}}"><i class="fas fa-trash-alt"></i></a></td>
    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
@endsection