@extends('layout.baseLayout')
@section('title', 'Panier')
@section('content')
<main id="main_liste">
    <h2>Panier</h2>

    <table id="tableau">
        <tr>
            <th>Produit</th>
            <th>Quantité</th>
            <th>Option</th>
        </tr>
        @foreach ($paniers as $panier)
        <tr>
            <th>{{ $panier['boisson_name'] }}</th>
            <th>1</th>
            <th>{{ Form::open(['url' => '/delete_panier']) }}
                {{ Form::hidden('id', $panier['id']) }}
                {{ Form::submit('Supprimer') }}
                {{ Form::close() }}
            </th>
        </tr>
        @endforeach
    </table>
</main>
@endsection