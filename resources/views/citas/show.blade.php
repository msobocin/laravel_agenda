@extends('app')

@section('content')
    <h2>{{ $cita->titol }}</h2>

    @if ( !$cita->contactos->count() )
        Your cita has no contactos.
    @else
        <ul>
            @foreach( $cita->contactos as $contacto )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('citas.contactos.destroy', $cita->slug, $contacto->slug))) !!}
                    <a href="{{ route('citas.contactos.show', [$cita->slug, $contacto->slug]) }}">{{ $contacto->nom }}</a>
                    (
                    {!! link_to_route('citas.contactos.edit', 'Edit', array($cita->slug, $contacto->slug), array('class' => 'btn btn-info')) !!},

                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                    )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('citas.index', 'Back to Citas') !!} |
        {!! link_to_route('citas.contactos.create', 'Create Contacto', $cita->slug) !!}
    </p>
@endsection