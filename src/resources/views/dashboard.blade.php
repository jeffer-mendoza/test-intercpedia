@extends('layouts.admin')

@section('title'){{ __('dashboard.title')}} @endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">{{ __('message.home') }}</a></li>
    <li class="breadcrumb-item active"> {{ __('dashboard.breadcrumb.title')}} </li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$companyTotal}}</h3>

                    <p>{{ __('dashboard.company') }}</p>
                </div>
                <div class="icon">
                    <i class="fas fa-building"></i>
                </div>
                <a href="/company" class="small-box-footer"> {{ __('dashboard.link') }}
                    <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$employeeTotal}}</h3>

                    <p>{{ __('dashboard.employee') }}</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="/employee" class="small-box-footer">{{ __('dashboard.link') }}
                    <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@stop

