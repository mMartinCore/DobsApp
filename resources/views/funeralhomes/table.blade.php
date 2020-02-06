<table class="table table-responsive" id="funeralhomes-table">
    <thead>
        <tr>
        <th>Funeral Home</th>
       <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($funeralhomes as $funeralhome)
        <tr>
            <td>{!! $funeralhome->funeralhome !!}</td>
            <td>
                {!! Form::open(['route' => ['funeralhomes.destroy', $funeralhome->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('funeralhomes.show', [$funeralhome->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('funeralhomes.edit', [$funeralhome->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $funeralhomes->links()  !!}
