<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $leaveClaim->id !!}</p>
</div>

<!-- Reason Field -->
<div class="form-group">
    {!! Form::label('Reason', 'Reason:') !!}
    <p>{!! $leaveClaim->Reason !!}</p>
</div>

<!-- Applieddate Field -->
<div class="form-group">
    {!! Form::label('AppliedDate', 'Applieddate:') !!}
    <p>{!! $leaveClaim->AppliedDate !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $leaveClaim->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $leaveClaim->updated_at !!}</p>
</div>

