@extends('admin.layouts.master')

@section('content-header')
    <h1>
        {{ trans('general.pages') }}
    </h1>
@stop

@section('content')

    @include('common.errors')

    <div class="box">
        <div class="box-header with-border">
            <h1 class="box-title">{{ trans('page.create_form') }}</h1>
        </div>
        <div class="box-body">
            {!! Form::open(['route' => 'admin.pages.store']) !!}
            @include('admin.pages.fields')
            {!! Form::close() !!}
        </div>
    </div>

@endsection