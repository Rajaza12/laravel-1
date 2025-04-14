@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card p-4 shadow-sm">
        <h2 class="mb-3">Gestion des Clients</h2>

        <!-- Formulaire de recherche -->
        <form method="GET" class="d-flex mb-3">
            <input type="text" name="search" value="{{ request('search') }}" class="form-control me-2" placeholder="Rechercher un client...">
            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Rechercher</button>
        </form>

      <!-- Tableau des clients -->
<div class="table-responsive">
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->nom }}</td>
                    <td>{{ $client->email }}</td>
                    <td>
                        <!-- Bouton de modification -->
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $client->id }}">
                            <i class="fas fa-edit"></i> Modifier
                        </button>
                        <!-- Formulaire de suppression -->
                        <form method="POST" action="{{ route('clients.destroy', $client) }}" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i> Supprimer
                            </button>
                        </form>
                    </td>
                </tr>

                <!-- Modal de modification -->
                <div class="modal fade" id="editModal{{ $client->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $client->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel{{ $client->id }}">Modifier les informations de {{ $client->nom }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Formulaire de modification -->
                                <form method="POST" action="{{ route('clients.update', $client) }}">
                                    @csrf @method('PUT')
                                    <div class="mb-3">
                                        <label for="nom" class="form-label">Nom</label>
                                        <input type="text" name="nom" value="{{ $client->nom }}" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" value="{{ $client->email }}" class="form-control" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                        <button type="submit" class="btn btn-primary">Sauvegarder les modifications</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
</div>


        <!-- Formulaire d'ajout de client -->
        <h3 class="mt-4">Ajouter un Client</h3>
        <form method="POST" action="{{ route('clients.store') }}" class="row g-3">
            @csrf
            <div class="col-md-6">
                <input type="text" name="nom" class="form-control" placeholder="Nom" required>
            </div>
            <div class="col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-user-plus"></i> Ajouter Client
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
