@include("staffs.layout.frontend")
<div class="row">
  <div class="col-12" style="display:flex">
    <div class="col-2"></div>
    <div class="col-2"></div>
    <div class="col-4"> 
      <h1 class="text-center text-warning" >thêm</h1>
      <form action="{{route('staff.store')}}" method="POST">
        @csrf
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </divd>
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">numberPhone</label>
          <input type="text" name="numberPhone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </divd>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button  type="submit"  class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</body>

</html>