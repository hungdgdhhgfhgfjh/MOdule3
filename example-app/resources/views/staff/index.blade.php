<!-- <div class="main-content"> -->
@extends('layout.app')

@section('content')
<h2 style="margin-top: 150px;" class="text-primary"> Bảng black</h2>

<form action="" method="get">
  @csrf
  <input class="input1" placeholder="" type="text" name="search" id="">
        <button class="button2" type="submit"><i class="fas fa-search"></i>search</button>
</form>
<a style="margin-left: -1000px;" class="btn btn-info" href="{{route('staff.create')}}">Add</a>
<table class="table table-dark">
  <thead>
    <tr>
      <th>id</th>
      <th>Name Staff</th>
      <th>Position</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Staff_1 as $Key =>$Staff)
    <tr>
      <td>{{$Staff->id}}</td>
      <td>{{$Staff->name_staff}}</td>
      <td>{{$Staff->position}}</td>
      <td><a class="btn btn-primary" href="{{route('staff.edit',$Staff->id)}}">edit</a></td>
      <form action="{{route('staff.destroy',$Staff->id)}}" method="POST">
      @csrf
      @method("delete")
      <td><button class="btn btn-danger" >delete</button></td>
      </form>
      <td></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection