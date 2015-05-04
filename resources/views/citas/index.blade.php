@extends('app')

@section('content')
    <h2>{!! Lang::get('agenda.citas') !!}</h2>

    @if ( !$citas->count() )
        {!! Lang::get('agenda.noMeet') !!}
    @else
        <ul>
            @foreach( $citas as $cita )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('citas.destroy', $cita->slug))) !!}
                    <a href="{{ route('citas.show', $cita->slug) }}">{{ $cita->titol }}</a>
                    (
                    {!! link_to_route('citas.edit', Lang::get('agenda.edit'), array($cita->slug), array('class' => 'btn btn-info')) !!},
                    {!! Form::submit(Lang::get('agenda.delete'), array('class' => 'btn btn-danger')) !!}
                    )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('citas.create', Lang::get('agenda.create.cita')) !!}
    </p>
@endsection