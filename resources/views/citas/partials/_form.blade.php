<div class="form-group">
    {!! Form::label('titol', 'Titol:') !!}
    {!! Form::text('titol') !!}
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug') !!}
</div>
<div class="form-group">
    {!! Form::label('data', 'Data:') !!}
    {!! Form::input('date', 'data') !!}
</div>
<div class="form-group">
    {!! Form::label('lloc', 'Lloc:') !!}
    {!! Form::text('lloc') !!}
</div>
<div class="form-group">
    {!! Form::label('descripcio', 'Descripcio:') !!}
    {!! Form::textarea('descripcio') !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>