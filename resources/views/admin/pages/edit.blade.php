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
            <h1 class="box-title">{{ trans('page.edit_form') }}</h1>
        </div>
        <div class="box-body">
            {!! Form::model($page, ['route' => ['admin.pages.update', $page->id], 'method' => 'patch']) !!}
                @include('admin.pages.fields')
            {!! Form::close() !!}
        </div>
    </div>

@endsection

