@extends('admin.layouts.master')

@section('content-header')
    <h1>
        {{ trans('general.slide_homes') }}
    </h1>
@stop

@section('content')

    @include('flash::message')

    <div class="box">
        <div class="box-body table-responsive no-padding">
            @include('admin.slideHomes.table')
        </div>
        <div class="box-footer clearfix">
            @include('common.paginate', ['object' => $slideHomes])
            {!! Form::open(['route' => 'admin.slideHomes.store', 'files' => true]) !!}
            @include('admin.slideHomes.fields')
            {!! Form::close() !!}
        </div>
    </div>

@endsection