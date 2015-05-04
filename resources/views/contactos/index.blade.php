@extends('app')

@section('content')
    <h2>{!! Lang::get('agenda.contacts')!!}</h2>

    @if ( !$contactos->count() )
        {!! Lang::get('agenda.noContacts') !!}
    @else
        <ul>
            @foreach( $contactos as $contacto )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('contactos.destroy', $contacto->slug))) !!}
                    <a href="{{ route('contactos.show', $contacto->slug) }}">{{ $contacto->nom }}</a>
                    (
                    {!! link_to_route('contactos.edit', Lang::get('agenda.edit'), array($contacto->slug), array('class' => 'btn btn-info')) !!},
                    {!! Form::submit(Lang::get('agenda.delete'), array('class' => 'btn btn-danger')) !!}
                    )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
@endsection