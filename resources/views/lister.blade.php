@extends('layout.baseLayout')
@section('title', 'Liste')
@section('content')
<main id="main_liste">
    <h2>Liste des boissons</h2>

    <table id="tableau">
        <tr>
            <th>Produit</th>
            <th>Contenance</th>
            <th>Description</th>
            <th>En stock</th>
            <th>Option</th>
        </tr>
        @foreach ($boissons as $boisson)
        <tr>
            <th>{{ $boisson['name'] }}</th>
            <th>@foreach ($boisson['contenance'] as $contenance)
                    {{ $contenance }}
                @endforeach
            </th>
            <th>{{ $boisson['description'] }}</th>
            <th>{{ $boisson['number'] }}</th>
            <th>{{ Form::open(['url' => '/updateboisson']) }}
                {{ Form::hidden('id', $boisson['id']) }}
                {{ Form::submit('Modifier') }}
                {{ Form::close() }}
                {{ Form::open(['url' => '/deleteboisson']) }}
                {{ Form::hidden('id', $boisson['id']) }}
                {{ Form::submit('Supprimer') }}
                {{ Form::close() }}
            </th>
        </tr>
        @endforeach
    </table>
</main>
@endsection