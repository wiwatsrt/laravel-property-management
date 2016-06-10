@extends('admin.layouts.master')

@section('content-header')
    <h1>
        {{ trans('general.pages') }}
    </h1>
@stop

@section('content')

    <div class="box">
        <div class="box-header with-border">
            <h1 class="box-title">{{ trans('page.show_form') }}</h1>
        </div>
        <div class="box-body">
            @include('admin.pages.show_fields')
        </div>
    </div>

@endsection
