@extends('layouts.admin')

@section('content')
<div class="table-responsive">
<table class="table table-hover table-striped" id="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Product name</th>
      <th>Category</th>
      <th>Price</th>
      <th>Image</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($prop as $p)

    <tr>
      <td>{{$p->id}}</td>
      <td>{{$p->product_name}}</td>
      <td>{{$p->category->category}}</td>
      <td>{{$p->price}}</td>
      <td>
        <img src="/images/{{$p->image}}" width="100px" height="100px" alt="">
      </td>

      <td>


        <a href="{{route('products.edit',$p->id)}}" class="btn btn-info btn-sm">Edit</a>
        </td>
<td>
          <form action="{{route('products.destroy',$p->id)}}" method="post">
            @csrf
             @method('DELETE')
            <input type="submit"  onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm" value="Delete">
          </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@stop
