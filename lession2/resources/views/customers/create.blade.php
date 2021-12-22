<form method="POST" action="{{ route('customer.store')}}">
@csrf
<input type="text" name="name" id="">
<input type="text" name="age" id="">
<button type="submit" >save</button>
</form>