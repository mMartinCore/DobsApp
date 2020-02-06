<!-- Id Field -->
<div class="form-group">
    {{Form::label('id', 'Id:') }}
    {{$rank->id }}
</div>

<!-- User Id Field -->
<div class="form-group">
    {{Form::label('user_id', 'User Id:') }}
    {{$rank->user_id }}
</div>

<!-- rank Field -->
<div class="form-group">
    {{Form::label('rank', 'rank:') }}
    {{$rank->rank }}
</div>

<!-- Modify By Field -->
<div class="form-group">
    {{Form::label('modify_by', 'Modify By:') }}
    {{$rank->modify_by }}
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {{Form::label('deleted_at', 'Deleted At:') }}
    {{$rank->deleted_at }}
</div>

<!-- Created At Field -->
<div class="form-group">
    {{Form::label('created_at', 'Created At:') }}
    {{$rank->created_at }}
</div>

<!-- Updated At Field -->
<div class="form-group">
    {{Form::label('updated_at', 'Updated At:') }}
    {{$rank->updated_at }}
</div>

