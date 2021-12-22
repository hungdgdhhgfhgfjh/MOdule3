@extends("layout.frontend")
@section("content")
<div class="container" style="width:600px">
    <h1 class= "text-center">Chi tiết khách hàng</h1>
    <div class="card">
        <div class="card-header" style="text-align: center;color:red">Thông tin <b style="color:black">{{ $user->name }}</b></div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title" style="color:red">Tên : <b style="color:black"> {{ $user->name }} </b> </h5>
                <p class="card-text" style="color:red">địa chỉ : <b style="color:black"> {{$user->address }} </b></p>
                <p class="card-text" style="color:red">số điện thoại : <b style="color:black"> {{$user->number_phone }} </b></p>
                <p class="card-text" style="color:red">email : <b style="color:black"> {{ $user->email }} </b></p>
            </div>
            </hr>
        </div>
    </div>
    <div class= "mt-2 text-end">
    <a href="{{route('cart.index')}}" class="btn btn-success"> Quay lại</a>
    </div>
</div>
@endsection