@extends('app')

@section('content')
    <h2>Create Contacto for Cita "{{ $cita->titol }}"</h2>

    {!! Form::model(new App\Contacto, ['route' => ['citas.contactos.store', $cita->slug], 'class'=>'']) !!}
    @include('contactos/partials/_form', ['submit_text' => 'Create Contacto'])
    {!! Form::close() !!}
@endsection