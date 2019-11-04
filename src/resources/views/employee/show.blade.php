@extends('layouts.admin')

@section('title'){{__('employee.title')}}@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/">{{__('dashboard.breadcrumb.title')}}</a></li>
    <li class="breadcrumb-item"><a href="/employee">{{__('employee.list.breadcrumb')}}</a></li>
    <li class="breadcrumb-item active">{{__('employee.show.breadcrumb')}}</li>
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
                <th>{{__('employee.fields.id')}}</th>
                <td>{{$employee->id}}</td>
            </tr>
            <tr>
                <th>{{__('employee.fields.firstname')}}</th>
                <td>{{$employee->firstname}}</td>
            </tr>
            <tr>
                <th>{{__('employee.fields.lastname')}}</th>
                <td>{{$employee->lastname}}</td>
            </tr>
            <tr>
                <th>{{__('employee.fields.company')}}</th>
                <td>{{$employee->company()->first()->name}}</td>
            </tr>
            <tr>
                <th>{{__('employee.fields.email')}}</th>
                <td>{{$employee->email}}</td>
            </tr>
            <tr>
                <th>{{__('employee.fields.phone')}}</th>
                <td>{{$employee->phone}}</td>
            </tr>
        </table>
    </div>
@endsection
