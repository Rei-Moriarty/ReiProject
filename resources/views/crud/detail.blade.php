@extends('starter')

@section('content')
<div class="container">
    <h1 class="text-center mt-5 mb-4">Detail</h1>
    <a href="/crud" class="btn btn-sm btn-primary mb-3" style="background-color: #007bff; color: #fff;"><i class="fas fa-arrow-left"></i> Back</a>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <tr style="background-color: #f8f9fa;">
                    <th style="background-color: #007bff; color: #fff;">Name</th>
                    <td>{{$guests->name}}</td>
                </tr>
                <tr style="background-color: #f2f9fc;">
                    <th style="background-color: #6cb2eb; color: #fff;">Company</th>
                    <td>{{$guests->company}}</td>
                </tr>
                <tr style="background-color: #eff8ff;">
                    <th style="background-color: #3498db; color: #fff;">Email</th>
                    <td>{{$guests->email}}</td>
                </tr>
                <tr style="background-color: #f5f9ff;">
                    <th style="background-color: #5fa8d4; color: #fff;">Phone</th>
                    <td>{{$guests->phone}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
