
@extends('layouts.admin')
@section('content')

<form class="" action="/product_category/{{$prop->id}}" method="post">
  @csrf
  @method('PATCH')
  <div class="form-group">
    <label for="">Category</label>
    <input class="form-control" type="text" name="category" value="{{$prop->category}}">
  </div>


  <input type="submit" name="" class="btn btn-success" value="Save">
</form>

@stop
