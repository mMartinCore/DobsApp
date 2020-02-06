<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    {!! $parish->id !!}
</div>

 
<!-- parish Field -->
<div class="form-group">
    {!! Form::label('parish', 'parish:') !!}
    {!! $parish->parish !!}
</div>

<!-- Modify By Field -->
<div class="form-group">
    {!! Form::label('modify_by', 'Modify By:') !!}
    {!! $parish->modify_by !!}
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    {!! $parish->deleted_at !!}
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    {!! $parish->created_at !!}
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    {!! $parish->updated_at !!}
</div>

