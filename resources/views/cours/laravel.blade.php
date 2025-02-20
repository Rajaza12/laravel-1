@extends('layouts.app')

@section('title', 'Cours React')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4 text-primary">TP Laravel</h1>
        <p class="lead">Bienvenue dans la section TP Laravel. Voici la structure du répertoire racine de Laravel.</p>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Structure du Répertoire Racine</h5>
        </div>
        <div class="card-body">
            <p>Le répertoire racine de Laravel contient plusieurs sous-répertoires essentiels. Voici une description de chacun d'eux :</p>
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Répertoire</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>app</strong></td>
                        <td>Contient le code de base de votre application Laravel.</td>
                    </tr>
                    <tr>
                        <td><strong>bootstrap</strong></td>
                        <td>Scripts de démarrage utilisés pour votre application.</td>
                    </tr>
                    <tr>
                        <td><strong>config</strong></td>
                        <td>Fichiers de configuration de votre projet.</td>
                    </tr>
                    <tr>
                        <td><strong>database</strong></td>
                        <td>Fichiers de base de données.</td>
                    </tr>
                    <tr>
                        <td><strong>public</strong></td>
                        <td>Contient les fichiers publics (CSS, JavaScript, images).</td>
                    </tr>
                    <tr>
                        <td><strong>resources</strong></td>
                        <td>Fichiers Sass, fichiers de langue et modèles.</td>
                    </tr>
                    <tr>
                        <td><strong>routes</strong></td>
                        <td>Fichiers de définition de routage.</td>
                    </tr>
                    <tr>
                        <td><strong>storage</strong></td>
                        <td>Fichiers de session, de cache et modèles compilés.</td>
                    </tr>
                    <tr>
                        <td><strong>test</strong></td>
                        <td>Cas de test pour votre application.</td>
                    </tr>
                    <tr>
                        <td><strong>vendor</strong></td>
                        <td>Dépendances installées via Composer.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="text-center">
        <a href="{{ url('/') }}" class="btn btn-primary btn-lg">Retour à l'accueil</a>
    </div>
</div>
@endsection
