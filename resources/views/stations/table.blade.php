<div class="table-responsive">
    <table class="table" id="stations-table">
        <thead>
            <tr>
          <th>Station</th>
          <th>Station Code</th>
          <th>Division </th>
           <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($stations as $station)
            <tr>
            <td>{!! $station->station !!}</td>
            <td>{!!  $station->stationCode !!}</td>
            <td>{!!  $station->division->division !!}</td>


                <td>
                    {!! Form::open(['route' => ['stations.destroy', $station->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('stations.show', [$station->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('stations.edit', [$station->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $stations->links()  !!}
</div>
