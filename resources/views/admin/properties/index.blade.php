@extends('admin.layouts.master')

@section('content-header')
    <h1>
        {{ trans('general.properties') }}
    </h1>
@stop

@section('content')

    @include('flash::message')

    <div class="box">
        <div class="box-body table-responsive no-padding">
            @include('admin.properties.table')
        </div>
        <div class="box-footer clearfix">
        @include('common.paginate', ['object' => $properties])
            <a href="{{ route('admin.properties.create') }}" class="btn btn-primary btn-flat">{{ trans('button.create') }}</a>
        </div>
    </div>

@endsection