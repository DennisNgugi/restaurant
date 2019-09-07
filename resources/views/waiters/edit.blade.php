
@extends('layouts.admin')
@section('content')

<form class="" action="/waiter/{{$prop->id}}" method="post" >
  @csrf
  @method('PATCH')
  <div class="form-group">
    <label for="">Waiter name</label>
    <input class="form-control" type="text" name="name" value="{{$prop->waiters_name}}">
  </div>
  <div class="form-group">
    <label for="">Phone number</label>
<input type="text" name="phone" class="form-control" value="{{$prop->phone_number}}">
 </div>

  <div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control" name="email" value="{{$prop->email}}">
  </div>

  <input type="submit" name="" class="btn btn-success" value="Save">
</form>

@stop
