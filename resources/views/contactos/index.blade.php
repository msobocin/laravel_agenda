@extends('app')

@section('content')
    <h2>Contactos</h2>

    @if ( !$contactos->count() )
        You have no contactos
    @else
        <ul>
            @foreach( $contactos as $contacto )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('contactos.destroy', $contacto->slug))) !!}
                    <a href="{{ route('contactos.show', $contacto->slug) }}">{{ $contacto->nom }}</a>
                    (
                    {!! link_to_route('contactos.edit', 'Edit', array($contacto->slug), array('class' => 'btn btn-info')) !!},
                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                    )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
@endsection