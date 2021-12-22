@extends("home.layoutHome.fullter")
@section("content")
<div class="portfolio-section">
    <div class="container">
        <div class="row">

            <!-- START PORTFOLIO HEADING -->
            <div class="col-12">
                <div class="portfolioHeading text-center">
                    <h1 class="high-lighted-heading">Sản phẩm phổ biến của chúng tôi</h1>
                </div>
            </div>
            <!-- END PORTFOLIO HEADING -->
            <!-- START FILTERS -->
            <div class="col-12">
                <div class="clearfix d-flex justify-content-center">
                    <div id="js-filters-blog-posts" class="cbp-l-filters-button cbp-1-filters-alignCenter">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">Tất cả</div>
                        <div data-filter=".Classic" class="cbp-filter-item">Cổ Điển</div>
                        <div data-filter=".Fantasy" class="cbp-filter-item">Tưởng tượng</div>
                        <div data-filter=".motion" class="cbp-filter-item">Tiểu thuyết lịch sử</div>
                    </div>
                </div>
            </div>
            <!-- END FILTERS -->

            <!-- START PORTFOLIO IMAGES -->
            <div class="col-12">
                <div id="js-grid-blog-posts" class="cbp">
                    <div class="cbp-item Classic Fantasy">
                        <a  href="book-shop\shop-cart.html">
                        </a>
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="{{route('home.bookDetails',$communication_book->id)}}"  ><img style="width:350px; height:350px;" src="{{$communication_book->image_book}}" alt="Book 1"></a></div>
                            <div class="item"> <a href="{{route('home.bookDetails',$communication_book->id)}}" ><img style="width:350px; height:350px;" src="{{$communication_book->image_book}}" alt="Book 1"></a></div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="{{route('home.bookDetails',$communication_book->id)}}" target="_blank" class="portfolio-title">{{$communication_book->name_book}}</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">{{number_format($communication_book->price)."VNĐ"}}</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item Classic Fantasy">
                        <a  href="book-shop\shop-cart.html">
                        </a>
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a  href="{{route('home.bookDetails',$exploration_book->id)}}"> <img style="width:350px; height:350px;" src="{{$exploration_book->image_book}}" alt=""></a></div>
                            <div class="item"> <a  href="{{route('home.bookDetails',$exploration_book->id)}}"><img style="width:350px; height:350px;" src="{{$exploration_book->image_book}}" alt=""></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                               <div class="cbp-l-grid-blog-title"><a href="{{route('home.bookDetails',$exploration_book->id)}}" target="_blank" class="portfolio-title">{{$exploration_book->name_book}}</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">{{ number_format($exploration_book->price)."VNĐ"}}</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item Classic">
                        <a  href="book-shop\shop-cart.html">
                        </a>
                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a href="{{route('home.bookDetails',$favorite_book->id)}}"> <img style="width:350px; height:350px;" src="{{$favorite_book->image_book}}" alt=""></a></div>
                            <div class="item"> <a href="{{route('home.bookDetails',$favorite_book->id)}}"><img style="width:350px; height:350px;" src="{{$favorite_book->image_book}}" alt=""></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="{{route('home.bookDetails',$favorite_book->id)}}" target="_blank" class="portfolio-title">{{$favorite_book->name_book}}</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">{{number_format($favorite_book->price). "VNĐ"}}</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item Fantasy motion">

                        <a  href="book-shop\shop-cart.html">
                        </a>

                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a  href="{{route('home.bookDetails',$think_big_book->id)}}"> <img style="width:350px; height:350px;" src="{{$think_big_book->image_book}}" alt=""></a></div>
                            <div class="item"> <a href="{{route('home.bookDetails',$think_big_book->id)}}"><img style="width:350px; height:350px;" src="{{$think_big_book->image_book}}" alt=""></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="{{route('home.bookDetails',$think_big_book->id)}}" target="_blank" class="portfolio-title">{{$think_big_book->name_book}}</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">{{number_format($think_big_book->price)."VNĐ"}}</div>
                            </div>
                        </div>
                    </div>

                    <div class="cbp-item Fantasy motion">
                        <a  href="book-shop\shop-cart.html">
                        </a>

                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a  href="{{route('home.bookDetails',$love_book->id)}}"> <img style="width:350px; height:350px;" src="{{$love_book->image_book}}" alt=""></a></div>
                            <div class="item"> <a   href="{{route('home.bookDetails',$love_book->id)}}"><img style="width:350px; height:350px;" src="{{$love_book->image_book}}" alt=""></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="{{route('home.bookDetails',$love_book->id)}}" target="_blank" class="portfolio-title">{{$love_book->name_book}}</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">{{number_format($love_book->price)."VNĐ"}}</div>
                            </div>
                        </div>

                    </div>

                    <div class="cbp-item Fantasy motion">
                        <a  href="book-shop\shop-cart.html">
                        </a>

                        <div class="cbp-caption-defaultWrap  owl-theme sync-portfolio-carousel owl-carousel">
                            <div class="item"> <a  href="{{route('home.bookDetails',$book_people_and_animals->id)}}"> <img style="width:350px; height:350px;" src="{{$book_people_and_animals->image_book}}" alt=""></a></div>
                            <div class="item"> <a  href="{{route('home.bookDetails',$book_people_and_animals->id)}}"><img style="width:350px; height:350px;" src="{{$book_people_and_animals->image_book}}" alt=""></a></div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-title"><a href="{{route('home.bookDetails',$book_people_and_animals->id)}}" target="_blank" class="portfolio-title">{{$book_people_and_animals->name_book}}</a></div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="cbp-l-grid-blog-desc portfolio-des">{{number_format($book_people_and_animals->price)."VNĐ"}}</div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- END PORTFOLIO IMAGES -->

        </div>
    </div>
</div>
<!-- END PORTOLIO SECTION -->

<!--START BANNER SECTION-->
<div class="banner-section parallax-slide">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 text-center text-lg-left">
                <div class="banner-content-wrapper">
                    <span>SẢN PHẨM XU HƯỚNG CỦA TUẦN</span>
                    <h1>Sách <span>Bộ sưu tập</span></h1>
                    <button type="button" class="btn green-color-yellow-gradient-btn">MUA NGAY</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


