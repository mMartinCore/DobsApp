<!-- Id Field -->
<div class="form-group">
    {{Form::label('id', 'Id:') }}
    {{$division->id }}
</div>

<!-- User Id Field -->
<div class="form-group">
    {{Form::label('user_id', 'User Id:') }}
    {{$division->user_id }}
</div>

<!-- division Field -->
<div class="form-group">
    {{Form::label('division', 'division:') }}
    {{$division->division }}
</div>
<div class="form-group">
    {{Form::label('parish_id', 'Parish:') }}
    {{$division->parish->parish }}

</div>

<!-- Modify By Field -->
<div class="form-group">
    {{Form::label('modify_by', 'Modify By:') }}
    {{$division->modify_by }}
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {{Form::label('deleted_at', 'Deleted At:') }}
    {{$division->deleted_at }}
</div>

<!-- Created At Field -->
<div class="form-group">
    {{Form::label('created_at', 'Created At:') }}
    {{$division->created_at }}
</div>

<!-- Updated At Field -->
<div class="form-group">
    {{Form::label('updated_at', 'Updated At:') }}
    {{$division->updated_at }}
</div>

