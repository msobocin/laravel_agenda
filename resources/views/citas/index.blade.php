@extends('app')

@section('content')
    <h2>citas</h2>

    @if ( !$citas->count() )
        You have no projects
    @else
        <ul>
            @foreach( $citas as $cita )
                <li><a href="{{ route('citas.show', $cita->slug) }}">{{ $cita->titol }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection