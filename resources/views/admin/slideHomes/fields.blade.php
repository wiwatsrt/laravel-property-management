<div class="row">
    <div class="form-group col-sm-12">
    {!! Form::label('filename', 'Filename:') !!}
    {!! Form::file('image') !!}
</div>

    <div class="form-group col-sm-12">
        {!! Form::submit(trans('button.save'), ['class' => 'btn btn-primary btn-flat']) !!}
        <a href="{!! route('admin.slideHomes.index') !!}" class="btn btn-default btn-flat">{{ trans('button.cancel') }}</a>
    </div>
</div>
