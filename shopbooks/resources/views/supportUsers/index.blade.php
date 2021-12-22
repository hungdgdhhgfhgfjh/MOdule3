
@extends('supportUsers.header')
@section('content')
    @if(count($supportUser) === 0)
    <div class="col-12 col-lg-6 contact-box text-center text-md-left wow slideInRight" data-wow-delay=".8s">
    <div class="col-12">
    @if (Session::has('success'))
    <p style="width:200px" class="alert-success">
      <i class="fas fa-check"></i>{{ Session::get('success') }}
    </p>
    @endif
  </div>
                    <div class="c-box wow fadeInRight">
                        <h4 class="heading-1">tin nhắn của khách hàng</h4>
                            <div class="row my-form">
                                <div class="col-md-12 col-sm-12">
                                    <div id="result"></div>
                                </div>
                                <div class="col-12">
                                    <p  style="width: 486px;height: 182px;" class="form-control" id="user_message" name="userMessage" placeholder="tin nhắn" rows="7" required="required"> không có tin nhắn</p>
                                </div>
                                <div class="col-12">
                                </div>
                            </div>
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
                        <h4 class="heading-1">lời trả lời của bạn</h4>
                            <div class="row my-form">
                                <div class="col-md-12 col-sm-12">
                                    <div id="result"></div>
                                </div>
                                <div class="col-12">
                                    <input style="width: 486px;height: 182px;" value="chưa trả lời" class="form-control"  id="user_message" name="userMessage" placeholder="tin nhắn" rows="7" required="required">
                                </div>
                                <div class="col-12 mt-4">
                                <button style="width: 475px;" class="btn green-color-yellow-gradient-btn user-contact contact_btn">gửi
                                </button>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        @foreach ($supportUser as $key => $support)
        <div class="col-12 col-lg-6 contact-box text-center text-md-left wow slideInRight" data-wow-delay=".8s">
                        <div class="c-box wow fadeInRight">
                            <h4 class="heading-1">tin nhắn của khách hàng</h4>
                                <div class="row my-form">
                                    <div class="col-md-12 col-sm-12">
                                        <div id="result"></div>
                                    </div>
                                    <div class="col-12">
                                        <p style="width: 486px;height: 182px;" class="form-control" id="user_message" name="userMessage" placeholder="tin nhắn"  required="required" >{{$support->customer}} </p> 
                                    </div>
                                    <div class="col-12">
                                    </div>
                                </div>
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
                    <form action="{{route('supportUser.update',$support->id)}}" method="post">
                    @csrf
                        <div class="c-box wow fadeInRight">
                            <h4 class="heading-1">lời trả lời của bạn</h4>
                            <form action=""class="contact-form" id="contact-form-data">
                                <div class="row my-form">
                                    <div class="col-md-12 col-sm-12">
                                        <div id="result"></div>
                                    </div>
                                    <div class="col-12">
                                        <input style="width: 486px;height: 182px;" class="form-control"  value="{{$support->admin}}"id="user_message" name="messageAdmin" placeholder="tin nhắn" rows="7" required="required"> 
                                    </div>
                                    <div class="col-12 mt-4">
                                <button style="width: 475px;" class="btn green-color-yellow-gradient-btn user-contact contact_btn">gửi
                                </button>
                            </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection