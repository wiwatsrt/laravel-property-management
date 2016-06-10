@extends('admin.layouts.master')

@section('content-header')
    <h1>
        {{ trans('general.slide_homes') }}
    </h1>
@stop

@section('content')

    <div class="box">
        <div class="box-header with-border">
            <h1 class="box-title">{{ trans('slide_home.show_form') }}</h1>
        </div>
        <div class="box-body">
            @include('admin.slideHomes.show_fields')
        </div>
    </div>

@endsection
