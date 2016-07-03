<div class="row">
    <div class="col-lg-10 col-md-8">
        <div class="row">
            <div class="form-group col-sm-12">
                {!! Form::label('name_en', 'Name [En]:') !!}
                {!! Form::text('name_en', isset($property) ? $property->translate('en')->name : null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('detail_en', 'Detail [En]:') !!}
                {!! Form::textarea('detail_en', isset($property) ? $property->translate('en')->detail : null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('key_feature_en', 'Key Feature [En]:') !!}
                {!! Form::textarea('key_feature_en', isset($property) ? $property->translate('en')->key_feature : null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('location_detail_en', 'Location [En]:') !!}
                {!! Form::textarea('location_detail_en', isset($property) ? $property->translate('en')->location_detail : null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::submit(trans('button.save'), ['class' => 'btn btn-primary btn-flat']) !!}
                <a href="{!! route('admin.properties.index') !!}" class="btn btn-default btn-flat">
                    {{ trans('button.cancel') }}
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4">
        <div class="row">
            <div class="form-group col-sm-12">
                @if(isset($property) && $property->image_url != null )
                    <img class="img-responsive" src="{{ $property->image_url }}" alt="">
                @endif
                {!! Form::label('image', 'Image:') !!}
                {!! Form::file('image',['id' => 'image']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('type_id', 'Type:') !!}
                {!! Form::select('type_id', $types, null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('category_id', 'Category:') !!}
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('location_id', 'Location:') !!}
                {!! Form::select('location_id', $locations, null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
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
            <div class="form-group{{ $errors->has('bedrooms') ? ' has-error' : '' }} col-lg-6 col-md-6">
                {!! Form::label('bedrooms', 'Bedrooms:') !!}
                {!! Form::text('bedrooms', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group{{ $errors->has('bathrooms') ? ' has-error' : '' }} col-lg-6 col-md-6">
                {!! Form::label('bathrooms', 'Bathrooms:') !!}
                {!! Form::text('bathrooms', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group{{ $errors->has('land_area') ? ' has-error' : '' }} col-lg-6 col-md-6">
                {!! Form::label('land_area', 'Land Area:') !!}
                {!! Form::text('land_area', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group{{ $errors->has('building_area') ? ' has-error' : '' }} col-lg-6 col-md-6">
                {!! Form::label('building_area', 'Building Area:') !!}
                {!! Form::text('building_area', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-sm-12">
                {!! Form::label('ownership', 'Ownership:') !!}
                {!! Form::select('ownership', $ownerships, null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }} col-sm-12">
                {!! Form::label('price', 'Price:') !!}
                {!! Form::text('price', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
</div>