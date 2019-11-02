@extends('layouts.admin')

@section('title')Company @endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Show Company</li>
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
            <h3 class="card-title">{{$company->name}}</h3>
        </div>
        <!-- /.card-header -->
        <table class="table table-striped table-bordered">
            <tr>
                <td rowspan="5" width="100">
                    @if ($company->logo == 'none')
                        <img width="200" src="https://image.shutterstock.com/image-illustration/none-flat-icon-260nw-1266167038.jpg">
                    @else
                        <img width="200" src="/storage/{{ $company->logo }}">
                    @endif
                </td>
            <tr>
                <th>ID</th>
                <td>{{$company->id}}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{$company->name}}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$company->email}}</td>
            </tr>
            <tr>
                <th>Website</th>
                <td>{{$company->website}}</td>
            </tr>
        </table>
    </div>
@endsection
