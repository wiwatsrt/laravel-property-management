@extends('admin.layouts.master')

@section('content-header')
    <h1>
        {{ trans('general.zone_locations') }}
    </h1>
@stop

@section('content')

    @include('common.errors')

    <div class="box">
        <div class="box-header with-border">
            <h1 class="box-title">{{ trans('zone_location.create_form') }}</h1>
        </div>
        <div class="box-body">
            {!! Form::open(['route' => 'admin.zoneLocations.store']) !!}
            @include('admin.zoneLocations.fields')
            {!! Form::close() !!}
        </div>
    </div>

@endsection