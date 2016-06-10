@extends('admin.layouts.master')

@section('content-header')
    <h1>
        {{ trans('general.locations') }}
    </h1>
@stop

@section('content')

    @include('common.errors')

    <div class="box">
        <div class="box-header with-border">
            <h1 class="box-title">{{ trans('location.create_form') }}</h1>
        </div>
        <div class="box-body">
            {!! Form::open(['route' => 'admin.locations.store']) !!}
            @include('admin.locations.fields')
            {!! Form::close() !!}
        </div>
    </div>

@endsection