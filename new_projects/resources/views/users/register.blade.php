<form action="{{route('users.store')}}" method="POST" >
<h1>login</h1>
@csrf
<input type="text" name="email">
<br>
<input type="text" name="password" placeholder="">
<br>
<input type="text" name="name" placeholder="">
<br>
<input type="text" name="country_id" placeholder="">
<br>
<br>
<button>đăng nhập</button>
</form>