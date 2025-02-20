@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des inscriptions</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inscriptions as $inscription)
            <tr>
                <td>{{ $inscription->nom }}</td>
                <td>{{ $inscription->email }}</td>
                <td>{{ $inscription->telephone }}</td>
                <td>
                    <form action="{{ route('inscription.destroy', $inscription->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection