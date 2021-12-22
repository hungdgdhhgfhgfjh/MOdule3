@extends("homeUser.layout.fullter")
@section("content")
<div class="shop-cart wow slideInUp" data-wow-duration="2s">
    <div class="container">
        <!-- START SHOP CART TABLE -->
        <div class="row pt-5">
            <div class="col-12 col-md-12  cart_table wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                <div class="col-12">
                    @if (Session::has('success'))
                    <p style="width:200px;" class="alert-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                    @endif
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered border-radius">
                        <thead>
                            <tr>
                                <th class="darkcolor">STT</th>
                                <th class="darkcolor">họ và tên</th>
                                <th class="darkcolor">trạng thái</th>
                                <th class="darkcolor">địa chỉ</th>
                                <th class="darkcolor">tổng tiền</th>
                                <th class="darkcolor">chi tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($orderUser) === 0)
                            <tr>
                                <td colspan="6">chưa thêm vào giỏ hàng</td>
                            </tr>
                            @else
                            @foreach($orderUser as $key => $order)
                            <tr>
                                <td>
                                    <h4 class="text-center amount">{{$order->id}}</h4>
                                <td>
                                    <h4 class="text-center amount">{{$order->name}}</h4>
                                </td>
                                <td class="text-center">
                                    <h4 class="text-center amount">{{$order->status}}</h4>
                                </td>
                                <td>
                                    <h4 class="text-center amount">{{$order->address}}</h4>
                                </td>
                                <td>
                                    <h4 class="text-center amount">{{number_format($order->totalPrice)."VNĐ"}}</h4>
                                </td>
                                <td>
                                   <a class="btn btn-light" href="{{route('homeUser.order_detailsUser',$order->id)}}">chi tiết</a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                    <div class="card-total">
                        <h4 class="heading-1">đơn hàng Của Bạn</h4>
                        <table>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
    </div>
                            @endsection