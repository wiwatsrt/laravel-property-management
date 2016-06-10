@extends('admin.layouts.master')

@section('content-header')
    <h1>
        {{ trans('general.zone_locations') }}
    </h1>
@stop

@section('content')

    @include('flash::message')

    <div class="box">
        <div class="box-body table-responsive no-padding">
            @include('admin.zoneLocations.table')
        </div>
        <div class="box-footer clearfix">
        @include('common.paginate', ['object' => $zoneLocations])
            <a href="{{ route('admin.zoneLocations.create') }}" class="btn btn-primary btn-flat">{{ trans('button.create') }}</a>
        </div>
    </div>

@endsection