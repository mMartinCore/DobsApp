

<!-- funeralhomes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('funeralhome', 'Funeral Home:') !!}
    {!! Form::text('funeralhome', null, ['class' => 'form-control']) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('funeralhomes.index') !!}" class="btn btn-default">Cancel</a>
</div>
