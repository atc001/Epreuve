@extends('layout.baseLayout')
@section('title', 'Ajouter')
@section('content')
<main id="main_insert">
    <h2>Ajouter une boisson</h2>
        {{ Form::open(['url' => '/insert_action']) }}
        {{ Form::label('name', 'Nom :') }}
        {{ Form::text('name') }}
        {{ Form::label('contenance', 'Contenance :') }}
        {{ Form::select('contenance[]', $contenances, null, array('multiple' => 'multiple')) }}
        {{ Form::label('description', 'Description :') }}
        {{ Form::text('description') }}
        {{ Form::label('number', 'En stock :') }}
        {{ Form::text('number') }}
        {{ Form::submit('Inserer') }}
        {{ Form::close() }}
</main>
@endsection