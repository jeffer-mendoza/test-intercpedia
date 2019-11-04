@extends('layouts.admin')

@section('title'){{__('employee.title')}}@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/">{{__('dashboard.breadcrumb.title')}}</a></li>
    <li class="breadcrumb-item"><a href="/employee">{{__('employee.list.breadcrumb')}}</a></li>
    <li class="breadcrumb-item active">{{__('employee.edit.breadcrumb')}}</li>
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
            <h3 class="card-title">{{__('employee.edit.title')}}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ route('employee.update', $employee->id) }}">
            @method('PATCH')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="firstname">{{__('employee.fields.firstname')}}*</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" required
                           placeholder="{{__('employee.placeholder.firstname')}}" value="{{$employee->firstname}}">
                </div>
                <div class="form-group">
                    <label for="lastname">{{__('employee.fields.lastname')}}*</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" required
                           placeholder="{{__('employee.placeholder.lastname')}}"  value="{{$employee->lastname}}">
                </div>

                <div class="form-group">
                    <label>{{__('employee.fields.company')}}</label>
                    <select class="form-control" name="company" required>
                        <option value="">{{__('employee.placeholder.selectCompany')}}</option>
                        @foreach($companies as $company)
                            <option @if($company->id == $employee->company) selected @endif value="{{$company->id}}">
                                {{$company->name}}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="email">{{__('employee.fields.email')}}</label>
                    <input type="email" class="form-control" name="email" id="email"
                           placeholder="{{__('employee.placeholder.email')}}" value="{{$employee->email}}">
                </div>
                <div class="form-group">
                    <label for="phone">{{__('employee.fields.phone')}}</label>
                    <input type="phone" class="form-control" name="phone" id="phone"
                           placeholder="{{__('employee.placeholder.phone')}}" value="{{$employee->phone}}">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{__('message.actions.update')}}</button>
            </div>
        </form>
    </div>
@endsection
