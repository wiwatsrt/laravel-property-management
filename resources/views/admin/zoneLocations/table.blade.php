<table class="table table-responsive" id="zoneLocations-table">
    <thead>
        <th>Name En</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($zoneLocations as $zoneLocation)
        <tr>
            <td>{!! $zoneLocation->name_en !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.zoneLocations.destroy', $zoneLocation->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.zoneLocations.show', [$zoneLocation->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.zoneLocations.edit', [$zoneLocation->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>