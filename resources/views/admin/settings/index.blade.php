@extends('admin.layouts.master')

@section('content-header')
    <h1>
        {{ trans('general.settings') }}
    </h1>
@stop

@section('content')

    @include('flash::message')

    <div class="box">
        <div class="box-body">
            {!! Form::open(['route' => 'admin.settings.update']) !!}
            @include('admin.settings.fields')
            {!! Form::close() !!}
        </div>
    </div>

@endsection