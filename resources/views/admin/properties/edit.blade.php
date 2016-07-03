@extends('admin.layouts.master')

@section('content-header')
    <h1>
        {{ trans('general.properties') }}
    </h1>
@stop

@section('content')

    @include('common.errors')

    <div class="box">
        <div class="box-header with-border">
            <h1 class="box-title">{{ trans('property.edit_form') }}</h1>
        </div>
        <div class="box-body">
            {!! Form::model($property, ['route' => ['admin.properties.update', $property->id], 'method' => 'patch', 'files' => true]) !!}
                @include('admin.properties.fields')
            {!! Form::close() !!}
        </div>
    </div>

@endsection

