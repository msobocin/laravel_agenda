@extends('app')

@section('content')
    <h2>{!! Lang::get('agenda.editContact') !!} "{{ $contacto->nom }}"</h2>

    {!! Form::model($contacto, ['method' => 'PATCH', 'route' => ['citas.contactos.update', $cita->slug, $contacto->slug]]) !!}
    @include('contactos/partials/_form', ['submit_text' => Lang::get('agenda.editContact')])
    {!! Form::close() !!}
@endsection