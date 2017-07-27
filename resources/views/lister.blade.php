@extends('layout.baseLayout')
@section('title', 'Liste')
@section('content')
<main id="main_liste">
    <h2>Liste des boissons</h2>

</main>
@endsection

<!--    <table id="tableau">
        <tr>
            <th class="separe">Image</th>
            <th class="separe">Boisson</th>
            <th class="separe">Description</th>
            <th class="separe">Contenance</th>
            <th>Option</th>
        </tr>
        @foreach ($boissons as $boisson)
        <tr>
            <th class="separe">{{ $boisson['name'] }}</th>
            <th class="separe">@foreach ($boisson['contenance'] as $contenance)
                    {{ $contenance }}
                @endforeach
            </th>
            <th class="separe"><img src="{{ URL::asset($boisson['cover']) }}"></th>
            <th>{{ Form::open(['url' => '/updatelivre']) }}
                {{ Form::hidden('id', $boisson['id']) }}
                {{ Form::submit('Modifier') }}
                {{ Form::close() }}
                {{ Form::open(['url' => '/deletelivre']) }}
                {{ Form::hidden('id', $boisson['id']) }}
                {{ Form::submit('Suprimer') }}
                {{ Form::close() }}
            </th>
        </tr>
        @endforeach
    </table>