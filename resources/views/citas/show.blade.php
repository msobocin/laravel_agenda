@extends('app')

@section('content')
    <h2>{{ $cita->titol }}</h2>

    @if ( !$cita->contactos->count() )
        {!! Lang::get('agenda.noContacts') !!}.
    @else$
        <ul>
            @foreach( $cita->contactos as $contacto )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('citas.contactos.destroy', $cita->slug, $contacto->slug))) !!}
                    <a href="{{ route('citas.contactos.show', [$cita->slug, $contacto->slug]) }}">{{ $contacto->nom }}</a>
                    (
                    {!! link_to_route('citas.contactos.edit', Lang::get('agenda.edit'), array($cita->slug, $contacto->slug), array('class' => 'btn btn-info')) !!},

                    {!! Form::submit(Lang::get('agenda.delete'), array('class' => 'btn btn-danger')) !!}
                    )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('citas.index', Lang::get('agenda.back')) !!} |
        {!! link_to_route('citas.contactos.create', Lang::get('agenda.create.contact'), $cita->slug) !!} |
        {!! link_to_route('citas.add', Lang::get('agenda.addContact'), $cita->slug) !!}
    </p>
@endsection