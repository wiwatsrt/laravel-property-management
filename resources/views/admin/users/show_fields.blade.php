<div class="form-group">
    {!! Form::label('name', trans('user.fields.name') . ':') !!}
    <p>{!! $user->name !!}</p>
</div>

<div class="form-group">
    {!! Form::label('email', trans('user.fields.email') . ':') !!}
    <p>{!! $user->email !!}</p>
</div>

<div class="form-group">
    {!! Form::label('created_at', trans('user.fields.created_at') . ':') !!}
    <p>{!! $user->created_at !!}</p>
</div>

<div class="form-group">
    {!! Form::label('updated_at', trans('user.fields.updated_at') . ':') !!}
    <p>{!! $user->updated_at !!}</p>
</div>

