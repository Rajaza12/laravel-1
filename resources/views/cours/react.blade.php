@extends('layouts.app')

@section('title', 'Cours React')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4 text-primary">Cours React : Introduction et Concepts</h1>
        <p class="lead">Découvrez les bases de React, le Virtual DOM, JSX et apprenez à créer un projet React.</p>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Introduction à React</h5>
        </div>
        <div class="card-body">
            <p>React est une bibliothèque JavaScript permettant de créer des interfaces graphiques modulaires et réactives. Il facilite la construction d’applications web modernes et performantes en divisant les vues en composants indépendants.</p>
            <p>Voici quelques concepts essentiels :</p>
            <ul class="list-group mb-3">
                <li class="list-group-item">Composants indépendants</li>
                <li class="list-group-item">Virtual DOM</li>
                <li class="list-group-item">JSX (JavaScript XML)</li>
            </ul>
        </div>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Le Virtual DOM</h5>
        </div>
        <div class="card-body">
            <p>Le Virtual DOM est une représentation virtuelle du DOM réel. Lorsqu’un élément est modifié, React crée un Virtual DOM, compare les différences avec le DOM réel, puis met à jour uniquement les éléments modifiés, améliorant ainsi les performances.</p>
        </div>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">JSX (JavaScript XML)</h5>
        </div>
        <div class="card-body">
            <p>JSX permet d'écrire des éléments HTML directement dans le code JavaScript :</p>
            <pre class="bg-light p-3 rounded">
const element = &lt;h1&gt;Hello, world!&lt;/h1&gt;;
            </pre>
            <p>Ce code sera compilé par Babel pour être compatible avec les navigateurs.</p>
        </div>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Création d'un Projet React</h5>
        </div>
        <div class="card-body">
            <p>Pour créer un projet React, suivez les étapes suivantes :</p>
            <ol class="list-group list-group-numbered mb-3">
                <li class="list-group-item">Installez Node.js : <a href="https://nodejs.org/en/download/" target="_blank" class="text-primary">https://nodejs.org/en/download/</a></li>
                <li class="list-group-item">Créez un projet React :</li>
                <pre class="bg-light p-3 rounded">npx create-react-app my-react-app</pre>
                <li class="list-group-item">Lancez le projet :</li>
                <pre class="bg-light p-3 rounded">cd my-react-app<br>npm start</pre>
            </ol>
        </div>
    </div>

    <div class="text-center">
        <a href="{{ url('/') }}" class="btn btn-primary btn-lg">Retour à l'accueil</a>
    </div>
</div>
@endsection