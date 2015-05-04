<div class="form-group">
    {!! Form::label('titol', Lang::get('agenda.title').":") !!}
    {!! Form::text('titol') !!}
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug') !!}
</div>
<div class="form-group">
    {!! Form::label('data', Lang::get('agenda.date').':') !!}
    {!! Form::input('date', 'data') !!}
</div>
<div class="form-group">
    {!! Form::label('lloc', Lang::get('agenda.place').':') !!}
    {!! Form::text('lloc') !!}
</div>
<div class="form-group">
    {!! Form::label('descripcio', Lang::get('agenda.description').':') !!}
    {!! Form::textarea('descripcio') !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>