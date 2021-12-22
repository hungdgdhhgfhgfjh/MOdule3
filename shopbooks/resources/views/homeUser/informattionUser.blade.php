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
                                <th class="darkcolor">họ và tên</th>
                                <th class="darkcolor">địa chỉ</th>
                                <th class="darkcolor">email</th>
                                <th class="darkcolor">số điện thoại</th>
                                <th style="width: 135px;" class="darkcolor">Thay Đổi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="d-table product-detail-cart">
                                        <div class="media">
                                            <div class="row no-gutters">
                                                <div class="col-12 col-lg-2 product-detail-cart-image">
                                                </div>
                                                <div class="col-12 col-lg-10 mt-auto product-detail-cart-data">
                                                    <div class="media-body ml-lg-3">
                                                        <h4 class="product-name">{{$user->name}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h4 class="text-center amount">{{$user->address}}</h4>
                                </td>
                                <td class="text-center">
                                    <div class="quote text-center mt-1">
                                    <h4 class="text-center amount">{{$user->email}}</h4>
                                    </div>
                                </td>
                                <td>
                                    <h4 class="text-center amount">{{$user->number_phone}}</h4>
                                    </td>
                                <td class="text-center"><a href="{{route('homeUser.fixInformationUser')}}" class="btn btn-light"><i class="fas fa-tools"></i></a></td>
                <div class="col-12 col-lg-6 wow slideInRight" data-wow-duration="2s">
                    <div class="card-total">
                        <b style="font-size: 32px;" class="heading-1">Thông tin của bạn</b>
                        <table>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END SHOP CART CHECKOUT FORM -->

        </div>
    </div>
@endsection