@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center text-primary fw-bold">Liste des utilisateurs inscrits</h2>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive shadow-sm rounded">
        <table class="table table-hover align-middle">
             <title>Liste des utilisateurs</title>
        </head>
        <body>
            <h1>Liste des utilisateurs inscrits</h1>
            <ul>
                @foreach($users as $user)
                    <li>{{ $user->name }} - {{ $user->email }}</li>
                @endforeach
            </ul>
            <tbody>
                @foreach ($users as $index => $user)
                    <tr>
                        <td class="fw-semibold">{{ $index + 1 }}</td>
                        <td>{{ $user->nom }}</td>
                        <td>{{ $user->prenom }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->telephone }}</td>
                        <td>
                            <!-- Bouton de modification -->
                            <a href="{{ route('auth.edit', $user->id) }}" class="btn btn-warning btn-sm">
                                Modifier
                            </a>
                            <!-- Formulaire pour supprimer l'utilisateur -->
                            <form action="{{ route('auth.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" >
                                    Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
