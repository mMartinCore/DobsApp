<div class="table-responsive">
    <table class="table" id="investigators-table">
        <thead>
            <tr>
                <th> Name</th>
        <th>RegNo.</th>
        <th>Assign Date</th>
        <th>Rank Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($investigators as $investigator)
            <tr>
                <td>{{ $investigator->investigator_first_name.' '. $investigator->investigator_last_name }}</td>
            <td>{{ $investigator->regNum }}</td>
            <td>{{ $investigator->assign_date }}</td>
            <td>{{ $investigator->rank_id }}</td>
                <td>
                    {{ Form::open(['route' => ['investigators.destroy', $investigator->id], 'method' => 'delete']) }}
                    <div class='btn-group'>
                        <a href="{{ route('investigators.show', [$investigator->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('investigators.edit', [$investigator->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {{ Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) }}
                    </div>
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
