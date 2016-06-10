<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::label('slug', 'Slug:') !!}
        {!! Form::text('slug', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::label('title_en', 'Title English:') !!}
        {!! Form::text('title_en', isset($page) ? $page->translate('en')->title : null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::label('content_en', 'Content English:') !!}
        {!! Form::textarea('content_en', isset($page) ? $page->translate('en')->content : null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::label('title_th', 'Title Thai:') !!}
        {!! Form::text('title_th', isset($page) ? $page->translate('th')->title : null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::label('content_th', 'Content Thai:') !!}
        {!! Form::textarea('content_th', isset($page) ? $page->translate('th')->content : null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::submit(trans('button.save'), ['class' => 'btn btn-primary btn-flat']) !!}
        <a href="{!! route('admin.pages.index') !!}" class="btn btn-default btn-flat">{{ trans('button.cancel') }}</a>
    </div>
</div>
