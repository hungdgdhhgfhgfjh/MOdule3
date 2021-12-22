@extends("homeUser.layout.fullter")
@section("content")
 <div class="single-product">
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-12">
             <div class="section-heading">
              <div class="line-dec"></div>
              <h1>{{$bookDetail->name_book}}</h1>
            </div>
          </div>
          <div class="col-md-6 mt-2">
            <div class="product-slider">
              <div id="slider" class="flexslider">
              </div>
              <div id="carousel" class="flexslider">
              <img style="width:400px;height:300px" src="{{$bookDetail->image_book}}" alt="">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <h4>{{$bookDetail->name_book}}</h4>
              <h6>{{number_format($bookDetail->price)."VNĐ"}}</h6>
              <p>{{$descriptionBook->Content_book}}</p>
                 <form   name="appForm" id="appForm" action="" method="post" class="boxA" >
                <label for="quantity">Quantity:</label>
                <input class="quote" type="text" name="quantity" 
                    value="1">
            <button type="button" id="process"  class="button">thêm vào <i class="fas fa-shopping-cart"></i></button>
              </form> 
              <div class="col-12">
            @if (Session::has('success'))
            <p width="width:200px" class="alert-success">
                <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
            </p>
            @endif
              <div class="down-content">
                <div class="categories">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
                    <div class="col-12 product-listing-heading">
                        <h1 class="heading text-left">các sách tượng tự</h1>
                    </div>
                    <!-- END LISTING HEADING -->
   
                    <!-- START PRODUCT LISTING SECTION -->
                    <div class="col-12 product-listing-products">

                        <!-- START DISPLAY PRODUCT -->
                        <div class="product-list row">
                        @foreach($categoryBooks as $categorBook)
                            <div class="col-12 col-md-6 col-lg-4 manage-color-hover wow slideInUp" data-wow-delay=".2s">
                           
                                <div class="product-item owl-theme product-listing-carousel owl-carousel">
                                    <div class="item p-item-img">
                                       <a href="{{route('home.bookDetails',$categorBook->id)}}"> <img style="width:350px; height:350px;" src="{{$categorBook->image_book}}" alt="images"></a>
                                        <div class="text-center d-flex justify-content-center align-items-center">
                                        </div>
                                    </div>
                                    <div class="item p-item-img">
                                    <a href="{{route('home.bookDetails',$categorBook->id)}}">  <img style="width:350px; height:350px;" src="{{$categorBook->image_book}}" alt="images"></a>
                                        <div class="text-center d-flex justify-content-center align-items-center">
                                        </div>
                                    </div>
                                </div>
                                <div class="p-item-detail">
                                    <h4 class="text-center p-item-name"><a href="{{route('home.bookDetails',$categorBook->id)}}"> {{$categorBook->name_book}} </a>
                                    </h4>
                                    <p class="text-center p-item-price">{{number_format($categorBook->price)."VNĐ"}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- END DISPLAY PRODUCT -->


                    </div>
                    <!-- END PRODUCT LISTING SECTION -->
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function () {

			$("#process").click(function (e) {
				$.ajax({
					url: "{{asset('file-003.php')}}",
					type: "POST",//default: GET
					data: { user_id:"{{$user->id}}",
                  book_id : "{{$book->id}}",   
                  price : "{{$book->price}}",   
                  quantity: $("#appForm :text[name='quantity']").val()
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
							alert("đã thêm vào giỏ hàng thành công");
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


