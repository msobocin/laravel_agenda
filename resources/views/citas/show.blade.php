@extends('app')

@section('content')
    <h2>{{ $cita->titol }}</h2>

    @if ( !$cita->contactos->count() )
        Your project has no tasks.
    @else
        <ul>
            @foreach( $cita->contactos as $contacto )
                <li><a href="{{ route('citas.contactos.show', [$cita->slug, $contacto->slug]) }}">{{ $contacto->nom }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection