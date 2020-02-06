<div class="container">


    <!-- Station Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('station', 'Station:') !!}
        {!! Form::text('station', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Station Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('stationCode', 'Station Code:') !!}
        {!! Form::text('stationCode', null, ['class' => 'form-control']) !!}
    </div>



    <div class="form-group  col-sm-6 {{$errors->has('division_d') ? 'has-error' :''}}">
            {{Form::label('division_id', 'Division')}}
            <select name="division_id" value="{{Request::old('division_id')}}" class="form-control" >
                    <option value="">Select a Division</option>
                          @foreach($divisions as $division)
                                 <option value='{{ $division->id }}'>{{ $division->division}}</option>
                          @endforeach
            </select>
        </div>





    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('stations.index') !!}" class="btn btn-default">Cancel</a>
    </div>

</div>
