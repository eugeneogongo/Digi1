<!-- Details Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Title', 'Title:') !!}
    {!! Form::text('details', null, ['class' => 'form-control']) !!}
</div>

<!-- Route No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('route_no', 'Route No:') !!}
    {!! Form::text('route_no', null, ['class' => 'form-control']) !!}
</div>

<!-- Route Field -->
<div class="form-group col-sm-6">
    {!! Form::label('route', 'Route Name:') !!}
    {!! Form::text('route', null, ['class' => 'form-control']) !!}
</div>

<!-- Noplate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('noplate', 'Noplate:') !!}
    {!! Form::text('noplate', null, ['class' => 'form-control']) !!}
</div>

<!-- Sacco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sacco', 'Sacco:') !!}
    {!! Form::text('sacco', null, ['class' => 'form-control']) !!}
</div>

<!-- Problem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('problem', 'Problem:') !!}
    {!! Form::textarea('problem', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('incidences.index') !!}" class="btn btn-default">Cancel</a>
</div>
