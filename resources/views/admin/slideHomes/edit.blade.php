@extends('admin.layouts.master')

@section('content-header')
    <h1>
        {{ trans('general.slide_homes') }}
    </h1>
@stop

@section('content')

    @include('common.errors')

    <div class="box">
        <div class="box-header with-border">
            <h1 class="box-title">{{ trans('slide_home.edit_form') }}</h1>
        </div>
        <div class="box-body">
            {!! Form::model($slideHome, ['route' => ['admin.slideHomes.update', $slideHome->id], 'method' => 'patch', 'files' => true]) !!}
                @include('admin.slideHomes.fields')
            {!! Form::close() !!}
        </div>
    </div>

@endsection

