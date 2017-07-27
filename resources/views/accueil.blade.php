@extends('layout.baseLayout')
@section('title', 'Accueil')
@section('content')
<main id="main_accueil">
    <h2 class="nomargin">Gestion des stocks</h2>
    <p>Voici le logiciel officiel de Carrefour pour gérer le stock des produits. Cliquez sur lister pour voir tout les produits mais encore ajouter pour en insérer un.</p>
    <ul>
		<li><a href="/lister">Lister</a></li>
		<li><a href="">Ajouter</a></li>
    </ul>
</main>
@endsection