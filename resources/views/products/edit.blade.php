
@extends('layouts.admin')
@section('content')


  <form class="" action="/products/{{$prop->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
  <div class="form-group">
    <label for="">Product name</label>
    <input class="form-control" type="text" name="product_name" value="{{$prop->product_name}}">
  </div>
  <div class="form-group">
    <label for="">Product Category</label>
<select class="form-control" name="category">

  @foreach($cat as $pp)
  <option value="{{$pp->id}}"
    @if($pp->id === $prop->category_id)
    selected
    @endif
    >
    {{$pp->category}}
  </option>
  @endforeach
</select>
 </div>

  <div class="form-group">
    <label for="">Price(Ksh.)</label>
    <input class="form-control" type="text" name="price" value="{{$prop->price}}">
  </div>
  <div class="form-group">
    <label for="">Image</label>
    <input type="file" class="form-control" name="image" value="{{$prop->image}}">
  </div>

  <input type="submit" name="" class="btn btn-success" value="Save">
</form>

@stop
