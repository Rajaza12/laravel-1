@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card p-4 shadow-sm">
        <h2 class="mb-3">Gestion des Produits</h2>

        <!-- Tableau des produits -->
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Client</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produits as $produit)
                        <tr>
                            <td>{{ $produit->nom }}</td>
                            <td>{{ $produit->prix }} €</td>
                            <td>{{ $produit->client->nom }}</td>
                            <td>
                                <form method="POST" action="{{ route('produits.destroy', $produit) }}" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i> Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Formulaire d'ajout de produit -->
        <h3 class="mt-4">Ajouter un Produit</h3>
        <form method="POST" action="{{ route('produits.store') }}" class="row g-3">
            @csrf
            <div class="col-md-4">
                <input type="text" name="nom" class="form-control" placeholder="Nom du produit" required>
            </div>
            <div class="col-md-4">
                <input type="number" step="0.01" name="prix" class="form-control" placeholder="Prix (€)" required>
            </div>
            <div class="col-md-4">
                <select name="client_id" class="form-select" required>
                    <option value="" disabled selected>Choisir un client</option>
                    @foreach($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-plus"></i> Ajouter Produit
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Ajout des icônes FontAwesome -->
@section('scripts')
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection

@endsection
