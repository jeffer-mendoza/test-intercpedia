@extends('layouts.admin')

@section('title'){{__('employee.title')}}@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/">{{__('dashboard.breadcrumb.title')}}</a></li>
    <li class="breadcrumb-item active">{{__('employee.list.breadcrumb')}}</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div><br/>
            @endif
            @if(session()->get('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div><br/>
            @endif
        </div>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{__('employee.list.title')}}</h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-12 text-right">
                    <a class="btn btn-primary" href="/employee/create">{{__('message.actions.create')}}</a>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid"
                           aria-describedby="example1_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-sort="ascending"
                                aria-label="Rendering engine: activate to sort column descending"
                                style="width: 5%;">
                                {{__('employee.fields.id')}}
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Browser: activate to sort column ascending" style="width: 342px;">
                                {{__('employee.fields.firstname')}}
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending" style="width: 305px;">
                                {{__('employee.fields.lastname')}}
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending"
                                style="width: 231px;">
                                {{__('employee.fields.company')}}
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending"
                                style="width: 231px;">
                                {{__('employee.fields.email')}}
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending"
                                style="width: 231px;">
                                {{__('employee.fields.phone')}}
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="2"
                                aria-label="CSS grade: activate to sort column ascending" style="width: 10%;">
                                {{__('employee.fields.actions')}}
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($employees as $employee)
                            <tr>
                                <td>{{$employee->id}}</td>
                                <td>{{$employee->firstname}}</td>
                                <td>{{$employee->lastname}}</td>
                                <td>{{$employee->company()->first()->name}}</td>
                                <td>{{$employee->email}}</td>
                                <td>{{$employee->phone}}</td>
                                <td>
                                    <div class="row">
                                        <a href="{{ route('employee.show',$employee->id)}}" class="btn btn-default">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('employee.edit',$employee->id)}}" class="btn btn-default">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('employee.destroy', $employee->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                        <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">{{__('employee.fields.id')}}</th>
                            <th rowspan="1" colspan="1">{{__('employee.fields.firstname')}}</th>
                            <th rowspan="1" colspan="1">{{__('employee.fields.lastname')}}</th>
                            <th rowspan="1" colspan="1">{{__('employee.fields.company')}}</th>
                            <th rowspan="1" colspan="1">{{__('employee.fields.email')}}</th>
                            <th rowspan="1" colspan="1">{{__('employee.fields.phone')}}</th>
                            <th rowspan="1" colspan="2">{{__('employee.fields.actions')}}</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                        Showing 1 to 10 of 57 entries
                    </div>
                </div>
                <div class="col-sm-12 col-md-7">
                    {{$employees->links()}}
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    </div>
@endsection
