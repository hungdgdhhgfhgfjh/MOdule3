@extends("staffs.layout.header")
@section("header")

<div class="container">
<h1 class="text-primary">thêm nhân viên</h1>
    <div class="row">
        <div class="col-4">
            <form action="{{route('staffs.update',$staff->id)}}" method="POST" >
            @csrf
            @method("put")
                <div class="form-group">
                    <label for="exampleInputEmail1">tên nhân viên</label>
                    <input type="text" value="{{$staff->Full_name}}"class="form-control"  name="Full_name">
                    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('Full_name') }}</b></div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nhóm nhân viên</label>
                    <input type="text" value="{{$staff->Staff_group}}" name="Staff_group" class="form-control" >
                    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('Staff_group') }}</b></div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Giới tính</label>
                    <input type="text" value="{{$staff->Sex}}"   name="Sex" class="form-control" >
                    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('Sex') }}</b></div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">số điện thoại</label>
                    <input type="text"  value="{{$staff->Phone_number}}" name="Phone_number" class="form-control" >
                    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('Phone_number') }}</b></div>
                </div>
                <button type="submit" class="btn btn-primary">thay đổi</button>
            </form>
        </div>
    </div>
</div>
@endsection