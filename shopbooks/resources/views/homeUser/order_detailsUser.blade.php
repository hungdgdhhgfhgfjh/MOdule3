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
                                <th class="darkcolor">số đơn hàng</th>
                                <th class="darkcolor">sách</th>
                                <th class="darkcolor">giá tiền</th>
                                <th class="darkcolor">số lượng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($order_detailsUser) === 0)
                            <tr>
                                <td colspan="6">chưa thêm vào giỏ hàng</td>
                            </tr>
                            @else
                            @foreach($order_detailsUser as $key => $order_details)
                            <tr>
                                <td>
                                    <h4 class="text-center amount">{{$order_details->orders_id}}</h4>
                                </td>
                                <td>
                                    <div class="d-table product-detail-cart">

                                        <div class="media">
                                            <div class="row no-gutters">

                                                <div class="col-12 col-lg-2 product-detail-cart-image">
                                                    <a class="shopping-product" href="javascript:void(0)"><img src="{{$order_details->image_book}}" alt="Generic placeholder image"></a>
                                                </div>

                                                <div class="col-12 col-lg-10 mt-auto product-detail-cart-data">
                                                    <div class="media-body ml-lg-3">
                                                        <h4 class="product-name">{{$order_details->name_book}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h4 class="text-center amount">{{number_format($order_details->price_each)."VNĐ"}}</h4>
                                </td>
                                <td class="text-center">
                                    <div class="quote text-center mt-1">
                                        <p class="quote">{{$order_details->quantity}}</p>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                            <div class="card-total">
                                <h4 class="heading-1">chi tiết đơn hàng của bạn</h4>
                                <table>
                                </table>
                            </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4">
    </div>
    <script type="text/javascript">
		$(document).ready(function () {

			$("#process").click(function (e) {
				$.ajax({
					url: "files/file-003.php",
					type: "POST",//default: GET
					data: { name_staff:"khanh pham",
					        position : "giám đốc"   
					},
					dataType: "html", //html -text - json - xml
					timeout: 3000,
					async: true, // 0, 1, 4
					contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
					statusCode: { //HTTP Status code
						404: function () {
							alert("Duong dan khong ton tai");
						},
						200: function () {
							alert("Da gui du lieu thanh cong den server");
						},
						500: function () {
							alert("Server dang bao tri");
						}
					},
					success: function (data, status, reponse) {
						console.log(data);
						console.log(status);
						console.log(reponse);
					},
					error: function (jqXHR, status, errorThrown) {
						console.log(jqXHR);
						console.log(status);
						console.log(errorThrown);
					}
				});

			});

		});
	</script>
    @endsection