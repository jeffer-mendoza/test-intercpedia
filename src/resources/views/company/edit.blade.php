@extends('layouts.admin')

@section('title')Company @endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Edit Company</li>
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
        <form method="post" action="{{ route('company.update', $company->id) }}"  enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name*</label>
                    <input type="text" class="form-control" name="name" value="{{ $company->name }}" id="name"
                           placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $company->email }}"
                           id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="text" class="form-control" name="website" value="{{ $company->website }}"
                           id="website" placeholder="Enter website">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Logo</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="logo" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
