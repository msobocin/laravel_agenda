@extends('app')

@section('content')
    <h2>{!! Lang::get('agenda.create.cita') !!}</h2>

    {!! Form::model(new App\Cita, ['route' => ['citas.store']]) !!}
    @include('citas/partials/_form', ['submit_text' => Lang::get('agenda.create.cita')])
    {!! Form::close() !!}
@endsection

