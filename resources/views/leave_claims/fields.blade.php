<!-- Reason Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Reason', 'Reason:') !!}
    {!! Form::text('Reason', null, ['class' => 'form-control']) !!}
</div>

<!-- Applieddate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AppliedDate', 'Applieddate:') !!}
    {!! Form::date('AppliedDate', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('leaveClaims.index') !!}" class="btn btn-default">Cancel</a>
</div>
