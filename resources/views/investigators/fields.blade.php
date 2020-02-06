<div class="container">

  <!-- Regnum Field -->
  <div class="form-group col-sm-3">
        {{ Form::label('regNum', 'Regnum:') }}
        {{ Form::number('regNum', null, ['class' => 'form-control']) }}
    </div>


    <!-- Rank Id Field -->
   <div class="form-group  col-sm-3 {{$errors->has('rank_id') ? 'has-error' :''}}">
                {{Form::label('rank_id', 'Rank')}}
                <select name="rank_id" value="{{Request::old('rank_id')}}" class="form-control" >
                        <option value="">Select a Rank</option>
                              @foreach($ranks as $rank)
                                     <option value='{{$rank->id }}'>{{ $rank->rank}}</option>
                              @endforeach
                </select>
            </div>


 <!-- Investigator First Name Field -->
<div class="form-group col-sm-3">
        {{ Form::label('investigator_first_name', 'Investigator First Name:') }}
        {{ Form::text('investigator_first_name', null, ['class' => 'form-control']) }}
    </div>

    <!-- Investigator Last Name Field -->
    <div class="form-group col-sm-3">
        {{ Form::label('investigator_last_name', 'Investigator Last Name:') }}
        {{ Form::text('investigator_last_name', null, ['class' => 'form-control']) }}
    </div>



    <!-- Assign Date Field -->
    <div class="form-group col-sm-3">
        {{ Form::label('assign_date', 'Assign Date:') }}
        {{ Form::date('assign_date', null, ['class' => 'form-control','id'=>'assign_date']) }}
    </div>

    @section('scripts')
        <script type="text/javascript">
            $('#assign_date').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss',
                useCurrent: false
            })
        </script>
    @endsection

    <!-- Contact No Field -->
    <div class="form-group col-sm-3">
        {{ Form::label('contact_no', 'Contact No:') }}
        {{ Form::text('contact_no', null, ['class' => 'form-control']) }}
    </div>



  <div class="form-group  col-sm-6 {{$errors->has('station_id') ? 'has-error' :''}}">
            {{Form::label('station_id', 'Station')}}
            <select name="station_id" value="{{Request::old('station_id')}}" class="form-control" >
                    <option value="">Select a Station</option>
                          @foreach($stations as $station)
                                 <option value='{{ $station->id }}'>{{ $station->station}}</option>
                          @endforeach
            </select>
        </div>



    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
        <a href="{{ route('investigators.index') }}" class="btn btn-default">Cancel</a>
    </div>

</div>
