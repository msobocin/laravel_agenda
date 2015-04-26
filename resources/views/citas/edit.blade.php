@extends('app')

@section('content')
    <h2>Edit Cita</h2>

    {!! Form::model($project, ['method' => 'PATCH', 'route' => ['citas.update', $project->slug]]) !!}
    @include('citas/partials/_form', ['submit_text' => 'Edit Cita'])
    {!! Form::close() !!}
@endsection