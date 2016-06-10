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
            <h1 class="box-title">{{ trans('user.create_form') }}</h1>
        </div>
        <div class="box-body">
            {!! Form::open(['route' => 'admin.users.store']) !!}
                <div class="row">
                    <div class="form-group col-sm-12">
                        {!! Form::label('name', trans('user.fields.name') . ':') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('email', trans('user.fields.email') . ':') !!}
                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('password', trans('user.fields.password') . ':') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('password_confirmation', trans('user.fields.password_confirmation') . ':') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::submit(trans('button.save'), ['class' => 'btn btn-primary btn-flat']) !!}
                        <a href="{!! route('admin.users.index') !!}" class="btn btn-default btn-flat">{{ trans('button.cancel') }}</a>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection