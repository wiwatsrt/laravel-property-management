@extends('admin.layouts.master')

@section('content-header')
    <h1>
        {{ trans('general.pages') }}
    </h1>
@stop

@section('content')

    @include('flash::message')

    <div class="box">
        <div class="box-body table-responsive no-padding">
            @include('admin.pages.table')
        </div>
        <div class="box-footer clearfix">
        @include('common.paginate', ['object' => $pages])
            <a href="{{ route('admin.pages.create') }}" class="btn btn-primary btn-flat">{{ trans('button.create') }}</a>
        </div>
    </div>

@endsection