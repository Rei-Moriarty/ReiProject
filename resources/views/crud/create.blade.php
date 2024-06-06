@extends('starter')
@section('content')
<div class="container">
    <h1 class="text-center mt-5 mb-4">Add Data</h1>
    <a href="/crud" class="btn btn-secondary mb-3"><i class="fas fa-arrow-left"></i> Back</a>
    <form action="{{url('/crud/store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" class="form-control" id="company" name="company" placeholder="Enter company">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number">
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
    </form>
</div>
@endsection
