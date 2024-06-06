@extends('starter')
@section('content')
<div class="container">
  <header class="text-center">
    <h1 style="color: #3498db;">Guest List</h1>
  </header>
  <p class="text-center" style="color: #87ceeb;">Welcome! This is a list of all registered guests.</p>
  <a href="/crud/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Add Data</a>
  <div class="table-responsive">
    <table class="table table-sm">
      <thead style="background-color: #87ceeb; color: #ffffff;">
        <tr>
          <th style="width: 30%;">Name</th>
          <th style="width: 30%;">Company</th>
          <th style="width: 20%;">Time Added</th>
          <th style="width: 20%;">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($guests as $guest)
        <tr class="@if($loop->odd) table-light @endif">
          <td>{{$guest->name}}</td>
          <td>{{$guest->company}}</td>
          <td>{{$guest->created_at->format('M d, Y H:i:s')}}</td>
          <td>
            <a href="/crud/{{$guest->id}}" class="btn btn-info btn-sm"><i class="fas fa-eye text-white"></i> Detail</a>
            <a href="/crud/{{$guest->id}}/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit text-white"></i> Edit</a>
            <form action="/crud/{{$guest->id}}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')"><i class="fas fa-trash-alt text-white"></i> Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection