@extends('layout.baseLayout')
@section('title', 'Modifier')
@section('content')
<main id="main_insert">
    <h2>Modifier une boisson</h2>
        {{ Form::open(['url' => '/update_action']) }}
        {{ Form::label('name', 'Nom :') }}
        {{ Form::text('name', $name) }}
        {{ Form::label('contenance', 'Contenance :') }}
        {{ Form::select('contenance[]', $contenances, null, array('multiple' => 'multiple')) }}
        {{ Form::label('description', 'Description :') }}
        {{ Form::text('description', $description) }}
        {{ Form::label('number', 'En stock :') }}
        {{ Form::text('number', $number) }}
        {{ Form::hidden('id', $id) }}
        {{ Form::submit('Modifier') }}
        {{ Form::close() }}
</main>
@endsection