<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::label('name_en', 'Name EN:') !!}
        {!! Form::text('name_en', isset($zoneLocation) ? $zoneLocation->translate('en')->name : null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::label('name_th', 'Name TH:') !!}
        {!! Form::text('name_th', isset($zoneLocation) ? $zoneLocation->translate('th')->name : null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::submit(trans('button.save'), ['class' => 'btn btn-primary btn-flat']) !!}
        <a href="{!! route('admin.zoneLocations.index') !!}"
           class="btn btn-default btn-flat">{{ trans('button.cancel') }}</a>
    </div>
</div>
