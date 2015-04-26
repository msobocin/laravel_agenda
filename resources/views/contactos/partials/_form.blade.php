<div class="form-group">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom') !!}
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug') !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email') !!}
</div>

<div class="form-group">
    {!! Form::label('tlf', 'Tlf:') !!}
    {!! Form::text('tlf') !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>