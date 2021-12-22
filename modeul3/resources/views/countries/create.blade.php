@extends("layout.header")
@section("header")
@endsection
<style>
.body {
    background-image: url("https://lh3.googleusercontent.com/iEgYEImW_pDNT13ar8YJzj6lLYjSkCbM0ROyv7elI1cXRM2tdGogs-ctW8tlYRE1r3zB8bDlMW4osxMJ86sMPUiOdlLZ156oBmXz-H_hhk5RCg5k6Z6U6TqVueCZmG2Bx56tkUAqGQ=w1314-h891-no");
    width: 100%;
}
</style>
<div class="container" >
<h1 class="text-center text-warning">Create</h1>
</div>
<div style="height: 503px;background: white;width: 385px;margin-left: 448px;border-radius:10px ;margin-top: 45px;border: 10px black;">
    <div class="container">
        <form action="{{route('countries.store')}}" method="POST">
        @csrf
            <div class="form-group">
                <label for="email"> Name Countries </label>
                <input type="text" class="form-control" placeholder="name" name="name">
                <div class="col-12">
            @if (Session::has('error_name'))
            <p class="alert-danger">
            <i class="fas fa-times"></i> {{ Session::get('error_name') }}
            </p>
            @endif
        </div>
            </div>
                <button type="submit" style="width: 100%;background: #9c88ff;" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div>