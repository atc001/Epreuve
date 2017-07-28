@extends('layout.baseLayout')
@section('title', 'Accueil')
@section('content')
<main id="main_accueil">
    <h2 class="nomargin">Gestion des stocks</h2>
    <p>Voici le logiciel officiel de Carrefour pour gérer le stock des boissons. Cliquez sur lister pour voir toute les boissons mais encore ajouter pour en insérer une.</p>
    <ul>
		<li><a href="/lister">Lister</a></li>
		<li><a href="/insert">Ajouter</a></li>
		<li><a href="/lister_achat">Achat</a></li>
    </ul>
</main>
@endsection