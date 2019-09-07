
@extends('layouts.admin')
@section('content')

<form class="" action="/product_category" method="post">
  @csrf
  <div class="form-group">
    <label for="">Category</label>
    <input class="form-control" type="text" name="category" value="">
  </div>


  <input type="submit" name="" class="btn btn-success" value="Save">
</form>

@stop
