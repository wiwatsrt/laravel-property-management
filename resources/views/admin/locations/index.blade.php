@extends('admin.layouts.master')

@section('content-header')
    <h1>
        {{ trans('general.locations') }}
    </h1>
@stop

@section('content')

    @include('flash::message')

    <div class="box">
        <div class="box-body table-responsive no-padding">
            @include('admin.locations.table')
        </div>
        <div class="box-footer clearfix">
            @include('common.paginate', ['object' => $locations])
            <a href="{{ route('admin.locations.create') }}" class="btn btn-primary btn-flat">{{ trans('button.create') }}</a>
        </div>
    </div>

@endsection