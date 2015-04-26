@extends('app')

@section('content')
    <h2>
        {!! link_to_route('citas.show', $cita->titol, [$cita->slug]) !!} -
        {{ $contacto->nom }}
    </h2>

    {{ $contacto->email }}
@endsection