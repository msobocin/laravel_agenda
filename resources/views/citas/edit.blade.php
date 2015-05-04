@extends('app')

@section('content')
    <h2>{!! Lang::get('agenda.editCita') !!}</h2>

    {!! Form::model($project, ['method' => 'PATCH', 'route' => ['citas.update', $project->slug]]) !!}
    @include('citas/partials/_form', ['submit_text' => Lang::get('agenda.editCita')])
    {!! Form::close() !!}
@endsection