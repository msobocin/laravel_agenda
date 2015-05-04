@extends('app')

@section('content')
    <h2>{!! Lang::get('agenda.create.contact') !!} {!! Lang::get('agenda.for') !!} "{{ $cita->titol }}"</h2>

    {!! Form::model(new App\Contacto, ['route' => ['citas.contactos.store', $cita->slug], 'class'=>'']) !!}
    @include('contactos/partials/_form', ['submit_text' => Lang::get('agenda.create.contact')])
    {!! Form::close() !!}
@endsection