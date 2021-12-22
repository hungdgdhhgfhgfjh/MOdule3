@extends("homeUser.layout.fullter")
@section("content")
<div class="shop-cart wow slideInUp" data-wow-duration="2s">
    <div class="container">
        <!-- START SHOP CART TABLE -->
        <div class="row pt-5">
            <div class="col-12 col-md-12  cart_table wow fadeInUp animated" data-wow-delay="300ms"
                style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
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
                                <th class="darkcolor">Sách</th>
                                <th class="darkcolor">Giá</th>
                                <th class="darkcolor">Số Lượng</th>
                                <th class="darkcolor">Tổng</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($cartUser) === 0)
                        <tr>
                        <td colspan="4">chưa thêm vào giỏ hàng</td>
                        </tr>
                        @else
                            @foreach($cartUser as $key => $cartUserId)
                            <tr>
                                <td>
                                    <div class="d-table product-detail-cart">

                                        <div class="media">
                                            <div class="row no-gutters">

                                                <div class="col-12 col-lg-2 product-detail-cart-image">
                                                    <a class="shopping-product" href="javascript:void(0)"><img
                                                            src="{{$cartUserId->image_book}}"
                                                            alt="Generic placeholder image"></a>
                                                </div>

                                                <div class="col-12 col-lg-10 mt-auto product-detail-cart-data">
                                                    <div class="media-body ml-lg-3">
                                                        <h4 class="product-name">{{$cartUserId->name_book}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h4 class="text-center amount">{{number_format($cartUserId->price)."VNĐ"}}</h4>
                                </td>
                                <td class="text-center">
                                        <div class="quote text-center mt-1">
                                            <p class="quote">{{$cartUserId->quantity}} </p>
                                        </div>
                                </td>
                                <td>
                                    <h4 class="text-center amount">{{number_format($cartUserId->totalPrice)."VNĐ"}}</h4>
                                </td>
                            </tr>
                                @endforeach
                         @endif
                         @if(!$carts)
                         <div class="col-12 col-lg-6 wow slideInRight mt-2" data-wow-duration="2s">
                                    <div class="card-total">
                                        <b style="font-size: 32px;" class="heading-1">Thông tin mua hàng</b>
                                        <table>
                                            <div class="col-12 col-lg-6 wow slideInRight mt-4" data-wow-duration="2s">
                                                <div class="card-total">
                                                    <h4 class="heading-1">Thông tin xác nhận</h4>
                                                    <br>
                                                    <form action="{{route('homeUser.pay')}}" method="post">
                                                        @csrf
                                                        <b>Tổng giá tiền của các sản phẩm:</b>
                                                        <br>
                                                        <b>0 VNĐ</b>
                                                        <br>
                                                        <b>Ngày mua Hàng</b>
                                                        <br>
                                                        <input type="text" value="{{date('Y-m-d H:i:s')}}"
                                                            class="quote">
                                                        <br>
                                                        <b> Ngày nhận hàng</b>
                                                        <br>
                                                        <input name="required_date" class="quote" type="date">
                                                        <br>
                                                        <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('required_date') }}</b></div>
                                                        <b>số điện thoại:{{$user->number_phone}}</b>
                                                        <br>
                                                        <b>địa chỉ:{{$user->address}}</b>
                                                        <a class="btn btn-primary" href="{{route('homeUser.informattionUser')}}">thay đổi</a>
                                                        <br>
                                                        <br>
                                                        <button onclick="return confirm('bạn có muốn mua không ??')"
                                                            class="btn btn-primary">Mua Ngay</button>
                                                    </form>
                                                    <a class="btn btn-success" href="{{route('homeUser.cart')}}">Quay
                                                        Về</a>
                                                </div>
                                            </div>
                                        </table>
                                    </div>
                                </div>
                </div>
                <!-- END SHOP CART CHECKOUT FORM -->
            </div>
        </div>
                         @else
                                <div class="col-12 col-lg-6 wow slideInRight mt-2" data-wow-duration="2s">
                                    <div class="card-total">
                                        <h4 class="heading-1">Thông tin mua hàng</h4>
                                        <table>
                                            <div class="col-12 col-lg-6 wow slideInRight mt-4" data-wow-duration="2s">
                                                <div class="card-total">
                                                    <h4 class="heading-1">Thông tin xác nhận</h4>
                                                    <br>
                                                    <form action="{{route('homeUser.pay')}}" method="post">
                                                        @csrf
                                                        <b>Tổng giá tiền của các sản phẩm:</b>
                                                        <br>
                                                        <b>{{number_format($carts->totalPrice)."VNĐ"}}</b>
                                                        <br>
                                                        <b>Ngày mua Hàng</b>
                                                        <br>
                                                        <input type="text" value="{{date('Y-m-d H:i:s')}}"
                                                            class="quote">
                                                        <br>
                                                        <b> Ngày nhận hàng</b>
                                                        <br>
                                                        <input name="required_date" class="quote" type="date">
                                                        <br>
                                                        <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('required_date') }}</b></div>
                                                        <b>số điện thoại:{{$user->number_phone}}</b>
                                                        <br>
                                                        <b>địa chỉ:{{$user->address}}</b>
                                                        <a class="btn btn-primary" href="{{route('homeUser.informattionUser')}}">thay đổi</a>
                                                        <br>
                                                        <br>
                                                        <button onclick="return confirm('bạn có muốn mua không ??')"
                                                            class="btn btn-primary">Mua Ngay</button>
                                                    </form>
                                                    <a class="btn btn-success" href="{{route('homeUser.cart')}}">Quay
                                                        Về</a>
                                                </div>
                                            </div>
                                        </table>
                                    </div>
                                </div>
                </div>
                <!-- END SHOP CART CHECKOUT FORM -->

            </div>
        </div>
        @endif
        @endsection