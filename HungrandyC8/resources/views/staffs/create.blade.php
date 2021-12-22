@extends("staffs.layout.header")
@section("header")

<div class="container">
<h1 class="text-primary">thêm nhân viên</h1>
    <div class="row">
        <div class="col-4">
            <form action="{{route('staffs.store')}}" method="POST" >
            @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">tên nhân viên</label>
                    <input type="text" class="form-control"  name="Full_name">
                    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('Full_name') }}</b></div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nhóm nhân viên</label>
                    <input type="text" name="Staff_group" class="form-control" >
                    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('Staff_group') }}</b></div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Giới tính</label>
                    <input type="text" name="Sex" class="form-control" >
                    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('Sex') }}</b></div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">số điện thoại</label>
                    <input type="text" name="Phone_number" class="form-control" >
                    <div style="width: 316px;" ><b  class="alert-danger">{{ $errors->first('Phone_number') }}</b></div>
                </div>
                <button type="submit" class="btn btn-primary">thêm</button>
            </form>
        </div>
    </div>
</div>
@endsection