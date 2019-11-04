@extends('layouts.admin')

@section('title'){{__('company.title')}} @endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/">{{__('dashboard.breadcrumb.title')}}</a></li>
    <li class="breadcrumb-item"><a href="/company">{{__('company.list.breadcrumb')}}</a></li>
    <li class="breadcrumb-item active">{{__('company.edit.breadcrumb')}}</li>
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
            <h3 class="card-title">{{__('company.edit.title')}}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ route('company.update', $company->id) }}"  enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">{{__('company.fields.name')}}*</label>
                    <input type="text" class="form-control" name="name" value="{{ $company->name }}" id="name"
                           placeholder="{{__('company.placeholder.name')}}">
                </div>
                <div class="form-group">
                    <label for="email">{{__('company.fields.email')}}</label>
                    <input type="email" class="form-control" name="email" value="{{ $company->email }}"
                           id="email" placeholder="{{__('company.placeholder.email')}}">
                </div>
                <div class="form-group">
                    <label for="website">{{__('company.fields.website')}}</label>
                    <input type="text" class="form-control" name="website" value="{{ $company->website }}"
                           id="website" placeholder="{{__('company.placeholder.website')}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">{{__('company.fields.logo')}}</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="logo" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">{{__('message.actions.file.choose')}}</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">{{__('message.actions.file.upload')}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{__('message.actions.update')}}</button>
            </div>
        </form>
    </div>
@endsection
