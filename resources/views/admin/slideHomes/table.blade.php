<table class="table table-responsive" id="slideHomes-table">
    <thead>
        <th>Filename</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($slideHomes as $slideHome)
        <tr>
            <td><img src="{{ $slideHome->image_url }}" height="64px"></td>
            <td>
                {!! Form::open(['route' => ['admin.slideHomes.destroy', $slideHome->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.slideHomes.show', [$slideHome->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.slideHomes.edit', [$slideHome->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>