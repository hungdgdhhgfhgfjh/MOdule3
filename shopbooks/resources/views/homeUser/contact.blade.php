@extends("homeUser.layout.fullter")
@section("content")
@if(!$mesageUser )
<section class="contact-sec" id="contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 contact-description wow slideInLeft" data-wow-delay=".8s">
                <div class="contact-detail wow fadeInLeft">
                    <div class="ex-detail">
                        <span class="fly-text">LIÊN HỆ CHÚNG TÔI</span>
                        <h4 class="large-heading">
                            <span class="heading-1">Liên</span>
                            <span class="heading-2">Lạc</span>
                        </h4>
                    </div>
                    <p class="small-text text-center text-md-left">
                        các lời đóng góp của các bạn sẽ làm công ty chúng tôi càng ngày càng hoàn thiện hơn và chúng tôi sẽ trả lời cho bạn sớm nhất có thể cảm ơn bạn rất nhiều
                    </p>
                    <div class="row location-details text-center text-md-left">
                        <div class="col-12 col-md-6 country-1">
                            <h4 class="heading-text text-left">Việt Nam</h4>
                            <ul>
                                <li><i class="fas fa-mobile-alt"></i><a href="#">0972722398</a></li>
                                <li><i class="fas fa-envelope"></i><a href="#">Hưng Randy</a></li>
                                <li><i class="fas fa-map-marker"></i><a href="#">02 Chu Mạnh Trinh, Thành Phố Đông Hà, Tỉnh Quảng Trị</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 contact-box text-center text-md-left wow slideInRight" data-wow-delay=".8s">
                <div class="c-box wow fadeInRight">
                    <h4 class="heading-1">tin nhắn</h4>
                    <form class="contact-form" action="{{route('homeUser.mesageUser')}}" method="post" id="contact-form-data">
                        @csrf
                        <div class="row my-form">
                            <div class="col-md-12 col-sm-12">
                                <div id="result"></div>
                            </div>
                            <div class="col-12">
                                <input style="width: 527px;height: 182px;" value="chưa nhắn tín" class="form-control" id="user_message" name="userMessage" placeholder="tin nhắn" rows="7" required="required">
                            </div>
                            <div class="col-12">
                                <button style="width: 527px;" class="btn green-color-yellow-gradient-btn user-contact contact_btn">gửi
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-6 contact-description wow slideInLeft" data-wow-delay=".8s">
                <div class="contact-detail wow fadeInLeft">
                    <div class="ex-detail">
                        <span class="fly-text"></span>
                        <h4 class="large-heading">
                            <span class="heading-1"></span>
                            <span class="heading-2"></span>
                        </h4>
                    </div>
                    <p class="small-text text-center text-md-left">

                    </p>
                    <div class="row location-details text-center text-md-left">
                        <div class="col-12 col-md-6 country-1">
                            <h4 class="heading-text text-left"></h4>
                            <ul>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 contact-box text-center text-md-left wow slideInRight" data-wow-delay=".8s">
                <div class="c-box wow fadeInRight">
                    <h4 class="heading-1">cảm ơn bạn</h4>
                    <form class="contact-form" id="contact-form-data">
                        <div class="row my-form">
                            <div class="col-md-12 col-sm-12">
                                <div id="result"></div>
                            </div>
                            <div class="col-12">
                                <p style="width: 527px;height: 182px;" class="form-control" id="user_message" name="userMessage" placeholder="tin nhắn" rows="7" required="required"> chưa trả lời </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
@else
<section class="contact-sec" id="contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 contact-description wow slideInLeft" data-wow-delay=".8s">
                <div class="contact-detail wow fadeInLeft">
                    <div class="ex-detail">
                        <span class="fly-text">LIÊN HỆ CHÚNG TÔI</span>
                        <h4 class="large-heading">
                            <span class="heading-1">Liên</span>
                            <span class="heading-2">Lạc</span>
                        </h4>
                    </div>
                    <p class="small-text text-center text-md-left">
                        các lời đóng góp của các bạn sẽ làm công ty chúng tôi càng ngày càng hoàn thiện hơn và chúng tôi sẽ trả lời cho bạn sớm nhất có thể cảm ơn bạn rất nhiều
                    </p>
                    <div class="row location-details text-center text-md-left">
                        <div class="col-12 col-md-6 country-1">
                            <h4 class="heading-text text-left">Việt Nam</h4>
                            <ul>
                                <li><i class="fas fa-mobile-alt"></i><a href="#">0972722398</a></li>
                                <li><i class="fas fa-envelope"></i><a href="#">Hưng Randy</a></li>
                                <li><i class="fas fa-map-marker"></i><a href="#">02 Chu Mạnh Trinh, Thành Phố Đông Hà, Tỉnh Quảng Trị</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 contact-box text-center text-md-left wow slideInRight" data-wow-delay=".8s">
                <div class="c-box wow fadeInRight">
                <div class="col-12">
    @if (Session::has('success'))
    <p style="width:500px" class="alert-success">
      <i class="fas fa-check"></i>{{ Session::get('success') }}
    </p>
    @endif
  </div>
                    <h4 class="heading-1">tin nhắn</h4>
                    <form class="contact-form" action="{{route('homeUser.mesageUser')}}" method="post" id="contact-form-data">
                        @csrf
                        <div class="row my-form">
                            <div class="col-md-12 col-sm-12">
                                <div id="result"></div>
                            </div>
                            <div class="col-12">
                                <input style="width: 527px;height: 182px;" value="{{$mesageUser->customer}}" class="form-control" id="user_message" name="userMessage" placeholder="tin nhắn" rows="7" required="required">
                            </div>
                            <div class="col-12">
                                <button style="width: 527px;" class="btn green-color-yellow-gradient-btn user-contact contact_btn">gửi
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-6 contact-description wow slideInLeft" data-wow-delay=".8s">
                <div class="contact-detail wow fadeInLeft">
                    <div class="ex-detail">
                        <span class="fly-text"></span>
                        <h4 class="large-heading">
                            <span class="heading-1"></span>
                            <span class="heading-2"></span>
                        </h4>
                    </div>
                    <p class="small-text text-center text-md-left">

                    </p>
                    <div class="row location-details text-center text-md-left">
                        <div class="col-12 col-md-6 country-1">
                            <h4 class="heading-text text-left"></h4>
                            <ul>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 contact-box text-center text-md-left wow slideInRight" data-wow-delay=".8s">
                <div class="c-box wow fadeInRight">
                    <h4 class="heading-1">cảm ơn bạn</h4>
                    <form class="contact-form" id="contact-form-data">
                        <div class="row my-form">
                            <div class="col-md-12 col-sm-12">
                                <div id="result"></div>
                            </div>
                            <div class="col-12">
                                <p style="width: 527px;height: 182px;" class="form-control" id="user_message" name="userMessage" placeholder="tin nhắn" rows="7" required="required"> {{$mesageUser->admin}} </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
@endif
@endsection