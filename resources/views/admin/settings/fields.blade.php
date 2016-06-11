<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::label('setting_headerTitleText', 'Header Title Text:') !!}
        {!! Form::text('setting_headerTitleText', config('settings.headerTitleText'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::label('setting_resultsPerPage', 'Results Per Page:') !!}
        {!! Form::text('setting_resultsPerPage', config('settings.resultsPerPage'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::label('setting_address', 'Address:') !!}
        {!! Form::text('setting_address', config('settings.address'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::label('setting_contactMobile', 'Mobile:') !!}
        {!! Form::text('setting_contactMobile', config('settings.contactMobile'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::label('setting_contactPhone', 'Phone:') !!}
        {!! Form::text('setting_contactPhone', config('settings.contactPhone'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::label('setting_contactFax', 'Fax:') !!}
        {!! Form::text('setting_contactFax', config('settings.contactFax'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::label('setting_email', 'Email:') !!}
        {!! Form::text('setting_email', config('settings.email'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::label('setting_website', 'Website:') !!}
        {!! Form::text('setting_website', config('settings.website'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::label('setting_facebook', 'Facebook:') !!}
        {!! Form::text('setting_facebook', config('settings.facebook'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::label('setting_twitter', 'Twitter:') !!}
        {!! Form::text('setting_twitter', config('settings.twitter'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::label('setting_googlePlus', 'Google Plus:') !!}
        {!! Form::text('setting_googlePlus', config('settings.googlePlus'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::submit(trans('button.save'), ['class' => 'btn btn-primary btn-flat']) !!}
        <a href="{!! route('admin.settings.index') !!}"
           class="btn btn-default btn-flat">{{ trans('button.cancel') }}</a>
    </div>
</div>
