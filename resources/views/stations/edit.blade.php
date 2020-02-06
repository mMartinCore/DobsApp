@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
                <i class="fa fa-building-o" aria-hidden="true"></i> Edit  Station
        </h1>
   </section>
   <div class="content">
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($station, ['route' => ['stations.update', $station->id], 'method' => 'patch']) !!}

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




                        <div class="form-group col-sm-6 {{$errors->has('division_id') ? 'has-error' :''}}">
                                {{Form::label('division_id', 'Division')}}
                                <select name="division_id" value="{{Request::old('division_id')}}" class="form-control" >

                                          <option value='{{ $station->division->id }}'>{{ $station->division->division}}</option>


                                    <option value=""> Select a Division </option>
                                            @foreach($divisions as $division)
                                                @if ($station->division_id == $division->id)
                                                @else
                                                <option value='{{ $division->id }}'>{{ $division->division}}</option>
                                                @endif
                                            @endforeach
                                    </select>
                                </div>





                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{!! route('stations.index') !!}" class="btn btn-default">Cancel</a>
                        </div>

                    </div>











                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
