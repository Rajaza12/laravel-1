@extends('layouts.app')
@section('content' , 'Admin')
<div class="mt-0.5 flex items-baseline font-medium ng-tns-c2592904013-125">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label for="name">Nom :</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <label for="password_confirmation">Confirmer le mot de passe :</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>
        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>
@endsection