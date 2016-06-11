@extends('admin.layouts.master')

@section('content-header')
    <h1>
        {{ trans('general.properties') }}
    </h1>
@stop

@section('content')

    <div class="box">
        <div class="box-header with-border">
            <h1 class="box-title">{{ trans('property.show_form') }}</h1>
        </div>
        <div class="box-body">
            @include('admin.properties.show_fields')
        </div>
    </div>

@endsection
