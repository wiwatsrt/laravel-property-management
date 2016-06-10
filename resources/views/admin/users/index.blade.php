@extends('admin.layouts.master')

@section('content-header')
    <h1>
        {{ trans('general.users') }}
    </h1>
@stop

@section('content')

    @include('flash::message')

    <div class="box">
        <div class="box-body table-responsive no-padding">
            @include('admin.users.table')
        </div>
        <div class="box-footer clearfix">
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-flat">{{ trans('button.create') }}</a>
        </div>
    </div>

@endsection