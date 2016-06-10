<div class="form-group">
    {!! Form::label('name_en', trans('location.fields.name_en') . ':') !!}
    <p>{!! $location->name_en !!}</p>
</div>

<div class="form-group">
    {!! Form::label('name_th', trans('location.fields.name_th') . ':') !!}
    <p>{!! $location->name_th !!}</p>
</div>

<div class="form-group">
    {!! Form::label('created_at', trans('location.fields.created_at') . ':') !!}
    <p>{!! $location->created_at !!}</p>
</div>

<div class="form-group">
    {!! Form::label('updated_at', trans('location.fields.updated_at') . ':') !!}
    <p>{!! $location->updated_at !!}</p>
</div>

