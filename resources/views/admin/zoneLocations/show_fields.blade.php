<div class="form-group">
    {!! Form::label('id', trans('zone_location.fields.id') . ':') !!}
    <p>{!! $zoneLocation->id !!}</p>
</div>

<div class="form-group">
    {!! Form::label('name_en', trans('zone_location.fields.name_en') . ':') !!}
    <p>{!! $zoneLocation->name_en !!}</p>
</div>

<div class="form-group">
    {!! Form::label('created_at', trans('zone_location.fields.created_at') . ':') !!}
    <p>{!! $zoneLocation->created_at !!}</p>
</div>

<div class="form-group">
    {!! Form::label('updated_at', trans('zone_location.fields.updated_at') . ':') !!}
    <p>{!! $zoneLocation->updated_at !!}</p>
</div>

