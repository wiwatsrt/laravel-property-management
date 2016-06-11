<table class="table table-responsive" id="properties-table">
    <thead>
        <th>Location Id</th>
        <th>Type Id</th>
        <th>Category Id</th>
        <th>View Id</th>
        <th>Ownership</th>
        <th>Bedrooms</th>
        <th>Bathrooms</th>
        <th>Parking</th>
        <th>Parking Cars</th>
        <th>Swimming Pool</th>
        <th>Land Area</th>
        <th>Building Area</th>
        <th>Price</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($properties as $property)
        <tr>
            <td>{!! $property->location_id !!}</td>
            <td>{!! $property->type_id !!}</td>
            <td>{!! $property->category_id !!}</td>
            <td>{!! $property->view_id !!}</td>
            <td>{!! $property->ownership !!}</td>
            <td>{!! $property->bedrooms !!}</td>
            <td>{!! $property->bathrooms !!}</td>
            <td>{!! $property->parking !!}</td>
            <td>{!! $property->parking_cars !!}</td>
            <td>{!! $property->swimming_pool !!}</td>
            <td>{!! $property->land_area !!}</td>
            <td>{!! $property->building_area !!}</td>
            <td>{!! $property->price !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.properties.destroy', $property->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.properties.show', [$property->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.properties.edit', [$property->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>