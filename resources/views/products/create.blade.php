
@extends('layouts.admin')
@section('content')

<form class="" action="/products" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="">Product name</label>
    <input class="form-control" type="text" name="product_name" value="">
  </div>
  <div class="form-group">
    <label for="">Product Category</label>
<select class="form-control" name="category">
<option value="">Choose category</option>
@foreach($prop as $p)
<option value="{{$p->id}}">{{$p->category}}</option>
@endforeach
</select>
 </div>

  <div class="form-group">
    <label for="">Price(Ksh.)</label>
    <input class="form-control" type="text" name="price" value="">
  </div>
  <div class="form-group">
    <label for="">Image</label>
    <input type="file" class="form-control" name="image" value="">
  </div>

  <input type="submit" name="" class="btn btn-success" value="Save">
</form>

@stop
