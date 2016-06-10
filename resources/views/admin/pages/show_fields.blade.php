<div class="form-group">
    {!! Form::label('id', trans('page.fields.id') . ':') !!}
    <p>{!! $page->id !!}</p>
</div>

<div class="form-group">
    {!! Form::label('slug', trans('page.fields.slug') . ':') !!}
    <p>{!! $page->slug !!}</p>
</div>

<div class="form-group">
    {!! Form::label('created_at', trans('page.fields.created_at') . ':') !!}
    <p>{!! $page->created_at !!}</p>
</div>

<div class="form-group">
    {!! Form::label('updated_at', trans('page.fields.updated_at') . ':') !!}
    <p>{!! $page->updated_at !!}</p>
</div>

