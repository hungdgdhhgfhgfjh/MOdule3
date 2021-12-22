<form action="{{route('users.store')}}" method="POST" >
<h1>login</h1>
@csrf
<input type="text" name="email">
<br>
<input type="text" name="password" placeholder="">
<br>
<button>đăng nhập</button>
</form>