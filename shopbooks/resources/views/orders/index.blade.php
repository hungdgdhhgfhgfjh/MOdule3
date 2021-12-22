@extends("orders.layout.frontend")
@section("content")
<div class="container">
      <h2 class="text-center text-warning">Đơn Hàng</h2>
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
  <table class="table table-dark">
    <thead>
      <tr>
      <th>số hóa đơn</th>
        <th>khách hàng</th>
        <th>trạng thái</th>
        <th>tổng tiền</th>
        <th>ngày mua hàng</th>
        <th>ngày nhận hàng</th>
        <th>chi tiết</th>
        <th>sữa</th>
        <th>xóa</th>
      </tr>
    </thead>
    <tbody>
    @foreach($orders as $key => $order)
    <tr>
    <td>{{$order->id}}</td>
    <td>{{$order->name}}<br><a class="btn btn-primary" href="{{route('users.show',$order->user_id)}}">xem chi tiết</a></td>
    <td>{{$order->status}}</td>
    <td>{{number_format($order->totalPrice)."VNĐ"}}</td>
    <td>{{$order->created_at}}</td>
    <td>{{$order->required_date}}</td>
    <td><a class="btn btn-light" href="{{route('orderdetails.index',$order->id)}}" >chi tiết</a></td>
    <td><a class="btn btn-primary" href="{{route('order.edit',$order->id)}}"><i class="fas fa-tools"></i></a></td>
    @csrf
    <td><a class="btn btn-danger" href="{{route('order.destroy',$order->id)}}" onclick="return confirm('bạn có muốn xóa không')"><i class="fas fa-trash-alt"></i></a ></td>
    </tr>
    </form>
    @endforeach
    </tbody>
  </table>
</div>
<div class=" d-flex justify-content-end">
                        {{ $orders->links() }}
                    </div>
</body>

</html>
@endsection