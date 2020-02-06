

<!-- divisions Field -->
<div class="form-group col-sm-6">
    {!! Form::label('division', 'Division:') !!}
    {!! Form::text('division', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6 {{$errors->has('parish') ? 'has-error' :''}}">
    {{Form::label('parish', 'Parish')}}
    <select name="parish" value="{{Request::old('parish')}}" class="form-control" >

        <option value=""> Select a Parish </option>

                @foreach ($parishes as $parish)

                    <option value='{{ $parish->id }}'>{{ $parish->parish}}</option>
                   
                @endforeach
        </select>
    </div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('divisions.index') !!}" class="btn btn-default">Cancel</a>
</div>
