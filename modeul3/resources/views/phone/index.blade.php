@extends("layout.header")
@section("header")
@endsection
<div class="container">
  <h2>phone</h2>    
  <table class="table table-dark">
    <thead>
      <tr>
        <th>id</th>
        <th>user id</th>
        <th>phone</th>
      </tr>
    </thead>
    <tbody>
    @foreach($phone as $key => $phone)
      <tr>
       <td>{{$phone->id}}</td>
       <td>{{$phone->user_id}}</td>
       <td>{{$phone->phone}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
