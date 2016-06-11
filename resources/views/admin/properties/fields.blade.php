<div class="row">
    <!-- Type Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('type_id', 'Type:') !!}
        {!! Form::select('type_id', $types, null, ['class' => 'form-control']) !!}
    </div>

    <!-- Category Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('category_id', 'Category:') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
    </div>

    <!-- Location Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('location_id', 'Location:') !!}
        {!! Form::select('location_id', $locations, null, ['class' => 'form-control']) !!}
    </div>
    
    <!-- View Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('view_id', 'View:') !!}
        {!! Form::select('view_id', $views, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::label('swimming_pool', 'Swimming Pool:') !!}
        {!! Form::select('swimming_pool', $swimmingPoolTypes, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::label('parking', 'Parking:') !!}
        {!! Form::select('parking', $parkingTypes, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::label('parking_cars', 'Parking Cars:') !!}
        {!! Form::text('parking_cars', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-lg-3 col-md-6">
        {!! Form::label('bedrooms', 'Bedrooms:') !!}
        {!! Form::text('bedrooms', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-lg-3 col-md-6">
        {!! Form::label('bathrooms', 'Bathrooms:') !!}
        {!! Form::text('bathrooms', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Land Area Field -->
    <div class="form-group col-lg-3 col-md-6">
        {!! Form::label('land_area', 'Land Area:') !!}
        {!! Form::text('land_area', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Building Area Field -->
    <div class="form-group col-lg-3 col-md-6">
        {!! Form::label('building_area', 'Building Area:') !!}
        {!! Form::text('building_area', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Price Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('price', 'Price:') !!}
        {!! Form::text('price', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Ownership Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('ownership', 'Ownership:') !!}
        {!! Form::select('ownership', $ownerships, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::submit(trans('button.save'), ['class' => 'btn btn-primary btn-flat']) !!}
        <a href="{!! route('admin.properties.index') !!}"
           class="btn btn-default btn-flat">{{ trans('button.cancel') }}</a>
    </div>
</div>
