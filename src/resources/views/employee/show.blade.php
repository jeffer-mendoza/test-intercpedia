@extends('layouts.admin')

@section('title')Employee @endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Show Employee</li>
@endsection


@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{$employee->firstname}}</h3>
        </div>
        <!-- /.card-header -->
        <table class="table table-striped table-bordered">
            <tr>
                <th>ID</th>
                <td>{{$employee->id}}</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>{{$employee->firstname}}</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>{{$employee->lastname}}</td>
            </tr>
            <tr>
                <th>Company</th>
                <td>{{$employee->company()->first()->name}}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$employee->email}}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{$employee->phone}}</td>
            </tr>
        </table>
    </div>
@endsection
