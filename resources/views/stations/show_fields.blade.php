<div class="container">

<!-- Station Field -->
<div class="form-group">
        {!! Form::label('station', 'Station:') !!}
        {!! $station->station !!}
    </div>
    <div class="form-group">
        {!! Form::label('stationCode', 'Station Code:') !!}
        {!! $station->stationCode !!}
    </div>

    <!-- Division Id Field -->
    <div class="form-group">
        {!! Form::label('division_id', 'Division Id:') !!}
        {!! $station->division->division !!}
    </div>



</div>
