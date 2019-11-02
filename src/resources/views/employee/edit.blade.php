@extends('layouts.admin')

@section('title')Employee @endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Edit Employee</li>
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
            <h3 class="card-title">Edit</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ route('employee.update', $employee->id) }}">
            @method('PATCH')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="firstname">Firstname*</label>
                    <input type="text" class="form-control" name="firstname" id="firstname"
                           placeholder="Enter firstname" required value="{{$employee->firstname}}">
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname*</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter lastname"
                           required value="{{$employee->lastname}}">
                </div>

                <div class="form-group">
                    <label>Company</label>
                    <select class="form-control" name="company" required>
                        <option value="">Choose a Company...</option>
                        @foreach($companies as $company)
                            <option @if($company->id == $employee->company) selected @endif value="{{$company->id}}">
                                {{$company->name}}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email"
                           value="{{$employee->email}}">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="phone" class="form-control" name="phone" id="phone" placeholder="Enter phone"
                           value="{{$employee->phone}}">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
