@extends('layouts.admin')

@section('content')
<div class="table-responsive">
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Waiter's name</th>
      <th>Phone no</th>
      <th>Email</th>

      <th>Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($prop as $p)

    <tr>
      <td>{{$p->id}}</td>
      <td>{{$p->waiters_name}}</td>
      <td>{{$p->phone_number}}</td>
      <td>{{$p->email}}</td>

      <td>
        <img src="/images/{{$p->image}}" width="100px" height="100px" alt="">
      </td>

      <td>
        <a href="{{route('waiter.edit',$p->id)}}" class="btn btn-info btn-sm">Edit</a>
        </td>
<td>
          <form action="{{route('waiter.destroy',$p->id)}}" method="post">
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
