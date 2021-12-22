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
                                <th class="darkcolor">Sách</th>
                                <th class="darkcolor">Giá</th>
                                <th class="darkcolor">Số Lượng</th>
                                <th class="darkcolor">Tổng</th>
                                <th style="width: 135px;" class="darkcolor">Thay Đổi</th>
                                <th  class="darkcolor">Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($cartUser) === 0)
                        <tr>
                        <td colspan="6">chưa thêm vào giỏ hàng</td>
                        </tr>
                        @else
                            @foreach($cartUser as $key => $cartUserId)
                            <tr>
                                <td>
                                    <div class="d-table product-detail-cart">

                                        <div class="media">
                                            <div class="row no-gutters">

                                                <div class="col-12 col-lg-2 product-detail-cart-image">
                                                <a class="shopping-product" href="javascript:void(0)"><img src="{{$cartUserId->image_book}}" alt="Generic placeholder image"></a>
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
                                <form action="{{route('homeUser.fixCartUser',$cartUserId->id)}}" method="post">
                                @csrf
                                    <div class="quote text-center mt-1">
                                        <input type="number" name="quantity" value="{{$cartUserId->quantity}}" class="quote">
                                    </div>
                                </td>
                                <td>
                                    <h4 class="text-center amount">{{number_format($cartUserId->totalPrice)."VNĐ"}}</h4>
                                    </td>
                                <td class="text-center"><button><i class="fas fa-tools"></i></button></td>
                                </td>
                                </form>
                                <td class="text-center"><a href="{{route('homeUser.delelteCartUser',$cartUserId->id)}}" onclick="return confirm('bạn có muốn xóa sản phẩm không')" class="btn-close" href="javascript:void(0)"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            @endforeach
                            @endif
                            @if(!$carts)
                <div class="col-12 col-lg-6 wow slideInRight" data-wow-duration="2s">
                    <div class="card-total">
                        <b style="font-size: 32px;" class="heading-1">Giỏ Hàng Của Bạn</b>
                        <table>
                            <tr>
                                <td>tổng giá tiền của các sản phẩm:</td>
                                <td>0 VNĐ</td>
                                <td><a class="btn btn-primary" href="{{route('homeUser.checkout')}}">mua ngay</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END SHOP CART CHECKOUT FORM -->

        </div>
    </div>
    @else
    <div class="col-12 col-lg-6 wow slideInRight" data-wow-duration="2s">
                    <div class="card-total">
                        <b style="font-size: 32px;" class="heading-1">Giỏ Hàng Của Bạn</b>
                        <table>
                            <tr>
                                <td>tổng giá tiền của các sản phẩm:</td>
                                <td>{{number_format($carts->totalPrice)."VNĐ"}}</td>
                                <td><a class="btn btn-primary" href="{{route('homeUser.checkout')}}">mua ngay</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END SHOP CART CHECKOUT FORM -->

        </div>
    </div>
    @endif
@endsection
