<div class="table-responsive">
    <table class="table" id="corpses-table">
        <thead>
            <tr>
        <th>Unidentified</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Middle Name</th>
        <th>Sex</th>
        <th>Death Date</th>
        <th>Pauper Burial Requested</th>
        <th>Pauper Burial Approved</th>
        <th>Buried</th>
        <th>Storage</th>
        <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($corpses as $corpse)
            <tr>
            <td>{!! $corpse->unidentified !!}</td>
            <td>{!! $corpse->first_name !!}</td>
            <td>{!! $corpse->last_name !!}</td>
            <td>{!! $corpse->middle_name !!}</td>

            <td>{!! $corpse->sex !!}</td>
            <td>{!! $corpse->death_date !!}</td>
            <td>{!! $corpse->pauper_burial_requested !!}</td>
            <td>{!! $corpse->pauper_burial_approved !!}</td>
            <td>{!! $corpse->buried !!}</td>
            <td>    @if ($corpse->storagedays() >=30)
                <b style="color:red; font-size:medium">{!! $corpse->storagedays() !!}</b>
               @elseif ($corpse->storagedays() >=20 && $corpse->storagedays() <25 )
                 <b style="color:yellow; font-size:medium">{!! $corpse->storagedays() !!}</b>
               @else
                 <b style="color:green; font-size:medium">{!! $corpse->storagedays() !!}</b>
               @endif
            </td>
                <td>
                    {!! Form::open(['route' => ['corpses.destroy', $corpse->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('corpses.show', [$corpse->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('corpses.edit', [$corpse->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>

                        <a href="{!! route('corpses.edit', [$corpse->id]) !!}" onclick="delete()" class='btn btn-danger btn-xs'><i class="glyphicon glyphicon-trash"></i></a>
                        {!! Form::button('', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
