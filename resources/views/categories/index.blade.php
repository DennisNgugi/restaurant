@extends('layouts.admin')

@section('content')
<div class="table-responsive">
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>#</th>

      <th>Category</th>

      <th>Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($prop as $p)

    <tr>
      <td>{{$p->id}}</td>
      <td>{{$p->category}}</td>

      <td>
        <a href="{{route('product_category.edit',$p->id)}}" class="btn btn-info btn-sm">Edit</a>
      </td>
<td>
          <form action="{{route('product_category.destroy',$p->id)}}" method="post">
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
