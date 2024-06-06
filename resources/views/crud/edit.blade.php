@extends('starter')
@section('content')
<div class="container" style="background-color: #f8f9fa; padding: 20px;">
    <h1 class="text-center mb-4" style="color: #007bff;">Edit Data</h1>
    <a href="/crud" class="btn btn-outline-primary mb-3"><i class="fas fa-arrow-left"></i> Back</a>
    <form action="/crud/{{$guests->id}}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name" style="color: #007bff;">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$guests->name}}" style="border-color: #007bff;">
        </div>
        <div class="form-group">
            <label for="company" style="color: #007bff;">Company</label>
            <input type="text" class="form-control" id="company" name="company" value="{{$guests->company}}" style="border-color: #007bff;">
        </div>
        <div class="form-group">
            <label for="email" style="color: #007bff;">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{$guests->email}}" style="border-color: #007bff;">
        </div>
        <div class="form-group">
            <label for="phone" style="color: #007bff;">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{$guests->phone}}" style="border-color: #007bff;">
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
    </form>
</div>
@endsection
