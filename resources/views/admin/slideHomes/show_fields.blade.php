<div class="form-group">
    {!! Form::label('id', trans('slide_home.fields.id') . ':') !!}
    <p>{!! $slideHome->id !!}</p>
</div>

<div class="form-group">
    {!! Form::label('filename', trans('slide_home.fields.filename') . ':') !!}
    <p>{!! $slideHome->filename !!}</p>
</div>

<div class="form-group">
    {!! Form::label('created_at', trans('slide_home.fields.created_at') . ':') !!}
    <p>{!! $slideHome->created_at !!}</p>
</div>

<div class="form-group">
    {!! Form::label('updated_at', trans('slide_home.fields.updated_at') . ':') !!}
    <p>{!! $slideHome->updated_at !!}</p>
</div>

