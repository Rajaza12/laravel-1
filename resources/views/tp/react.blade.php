@extends('layouts.app')

@section('title', 'TP React.js')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4 text-primary">TP React.js</h1>
        <p class="lead">Bienvenue dans la section TP React.js. Apprenez en pratiquant avec des exemples interactifs.</p>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Learning by Examples</h5>
        </div>
        <div class="card-body">
            <p>Notre outil <strong>"Show React"</strong> facilite la démonstration de React. Il affiche à la fois le code et le résultat.</p>
            <h5 class="mt-4">Exemple :</h5>
            <pre class="bg-dark text-white p-3 rounded">
import React from 'react';
import ReactDOM from 'react-dom/client';

function Hello(props) {
    return &lt;h1&gt;Hello World!&lt;/h1&gt;;
}

const container = document.getElementById("root");
const root = ReactDOM.createRoot(container);
root.render(&lt;Hello /&gt;);
            </pre>
        </div>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Get your own React.js Server</h5>
        </div>
        <div class="card-body">
            <p>Pour exécuter votre propre serveur React.js, suivez les étapes d'installation et lancez votre projet.</p>
            <div class="text-center">
                <a href="#" class="btn btn-primary btn-lg">Run Example &gt;</a>
            </div>
        </div>
    </div>
</div>
@endsection
