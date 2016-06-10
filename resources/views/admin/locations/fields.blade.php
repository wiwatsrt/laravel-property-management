<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::label('name_en', 'Name En:') !!}
        {!! Form::text('name_en', isset($location) ? $location->translate('en')->name : null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::label('name_th', 'Name Th:') !!}
        {!! Form::text('name_th', isset($location) ? $location->translate('th')->name : null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::submit(trans('button.save'), ['class' => 'btn btn-primary btn-flat']) !!}
        <a href="{!! route('admin.locations.index') !!}"
           class="btn btn-default btn-flat">{{ trans('button.cancel') }}</a>
    </div>
</div>
