@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
                Division
        </h1>
   </section>
   <div class="content">

       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {{ Form::model($division, ['route' => ['divisions.update', $division->id], 'method' => 'patch']) }}


                   <div class="container">


                    <div class="form-group col-sm-6">
                        {{ Form::label('division', 'Division:') }}
                        {{ Form::text('division', $division->division, ['class' => 'form-control']) }}
                    </div>






<div class="form-group col-sm-6 {{$errors->has('parish') ? 'has-error' :''}}">
    {{Form::label('parish', 'Parish')}}
    <select name="parish" value="{{Request::old('parish')}}" class="form-control" >
        <option value='{{ $division->parish_id}}'>{{ $division->parish->parish}}</option>
        <option value=""> Select a Parish </option>

                @foreach ($parishes as $parish)
                    @if ($division->parish_id == $parish->id)
                    @else
                    <option value='{{ $parish->id }}'>{{ $parish->parish}}</option>
                    @endif
                @endforeach
        </select>
    </div>







                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
                        <a href="{{ route('divisions.index') }}" class="btn btn-default">Cancel</a>
                    </div>

                </div>




                   {{ Form::close() }}
               </div>
           </div>
       </div>
   </div>
@endsection
