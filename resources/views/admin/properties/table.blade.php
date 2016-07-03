<table class="table table-responsive" id="properties-table">
    <thead>
        <th>Type</th>
        <th>Name</th>
        <th>Location</th>
        <th>Category</th>
        <th>Price</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($properties as $property)
        <tr>
            <td>{!! $property->type !!}</td>
            <td>{!! $property->name !!}</td>
            <td>{!! $property->location->name !!}</td>
            <td>{!! $property->category !!}</td>
            <td>{!! $property->formatted_price !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.properties.destroy', $property->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.properties.show', [$property->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.properties.edit', [$property->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>