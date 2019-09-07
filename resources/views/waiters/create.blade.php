
@extends('layouts.admin')
@section('content')

<form class="" action="/waiter" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="">Waiter name</label>
    <input class="form-control" type="text" name="name" value="">
  </div>
  <div class="form-group">
    <label for="">Phone number</label>
<input type="text" class="form-control" name="phone" value="">
 </div>

  <div class="form-group">
    <label for="">Email(optional.)</label>
    <input type="email" class="form-control" name="email" value="">
  </div>

  <input type="submit" name="" class="btn btn-success" value="Save">
</form>

@stop
