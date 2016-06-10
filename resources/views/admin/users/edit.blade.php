@extends('admin.layouts.master')

@section('content-header')
    <h1>
        {{ trans('general.users') }}
    </h1>
@stop

@section('content')

    @include('common.errors')

    <div class="box">
        <div class="box-header with-border">
            <h1 class="box-title">{{ trans('user.edit_form') }}</h1>
        </div>
        <div class="box-body">
            {!! Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'patch']) !!}
                @include('admin.users.fields')
            {!! Form::close() !!}
        </div>
    </div>

@endsection

