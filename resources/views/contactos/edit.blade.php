@extends('app')

@section('content')
    <h2>Edit Contacto "{{ $contacto->nom }}"</h2>

    {!! Form::model($contacto, ['method' => 'PATCH', 'route' => ['citas.contactos.update', $cita->slug, $contacto->slug]]) !!}
    @include('contactos/partials/_form', ['submit_text' => 'Edit Contacto'])
    {!! Form::close() !!}
@endsection