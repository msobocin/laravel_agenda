@extends('app')

@section('content')
    <h2>{{ $cita->titol }} - {!! Lang::get('agenda.addContact') !!}</h2>

    @if ( !$contactos->count() )
        Your cita has no contactos.
    @else
        <ul>
            @foreach( $contactos as $contacto )
                <li>
                    {!! Form::model($contacto, ['method' => 'PATCH', 'route' => ['citas.contactos.added', $cita->slug, $contacto->slug]]) !!}
                    <a href="{{ route('citas.contactos.show', [$cita->slug, $contacto->slug]) }}">{{ $contacto->nom }}</a>
                    {!! Form::submit(Lang::get('agenda.add'), array('class' => 'btn btn-info')) !!}
                    {!! Form::close() !!}

                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('citas.index', Lang::get('agenda.back')) !!} |
        {!! link_to_route('citas.contactos.create', Lang::get('agenda.create.contact'), $cita->slug) !!}
    </p>
@endsection