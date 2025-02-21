<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Rayane Jakani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f3f4f6, #e5e7eb);
            color: #333;
            height: 100%;
            overflow-x: hidden;
        }
        .navbar {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            background-color: #fff;
        }
        .navbar-brand {
            font-weight: 600;
            color: #0d6efd;
        }
        .navbar-nav .nav-link {
            font-weight: 500;
            transition: color 0.3s ease;
        }
        .navbar-nav .nav-link:hover {
            color: #0d6efd;
        }
        .form-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1050;
            justify-content: center;
            align-items: center;
        }
        .form-box {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 400px;
        }
        .btn-close {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 1.5rem;
            color: #333;
            background: none;
            border: none;
            cursor: pointer;
        }
        input.form-control {
            border-radius: 8px;
            border: 1px solid #ced4da;
            padding: 10px;
        }
        input.form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
        }
        h1.display-4 {
            font-weight: 700;
            color: #0d6efd;
            margin-bottom: 20px;
        }
        .centre-page {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile.show') }}">Mon Profil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Catégories</a>
                        <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                            <li class="dropdown-header">Cours</li>
                            <li><a class="dropdown-item" href="{{ route('cours.laravel') }}">Laravel</a></li>
                            <li><a class="dropdown-item" href="{{ route('cours.react') }}">React.js</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li class="dropdown-header">TP</li>
                            <li><a class="dropdown-item" href="{{ route('tp.laravel') }}">Code Laravel</a></li>
                            <li><a class="dropdown-item" href="{{ route('tp.react') }}">Code React.js</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.index') }}">Liste des Utilisateurs</a>   
                    </li>
                </ul>
                @if (Auth::check())
                    <form action="{{ route('logout') }}" method="POST" class="ms-3">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">Déconnexion</button>
                    </form>
                @else
                    <button type="button" class="btn btn-outline-success ms-3" id="btn-connexion">Connectez-Vous</button>
                @endif
            </div>
        </div>
    </nav>

    <div class="centre-page">
        <h1 class="display-4">Bienvenue sur Home</h1>
        <p class="lead">Découvrez nos cours et tutoriels pour maîtriser Laravel et React.js.</p>
        <button type="button" class="btn btn-outline-success ms-3" id="btn-inscription">Inscrivez-Vous</button>
    </div>

    <!-- Formulaire d'inscription -->
    <div id="inscription-form" class="form-overlay">
        <div class="form-box">
            <button class="btn-close" id="close-inscription">&times;</button>
            <h2>S'inscrire</h2>
            <form id="inscriptionForm" method="POST" action="{{ route('register.submit') }}">
                @csrf
                <input type="text" name="nom" placeholder="Nom" required class="form-control mb-3">
                <input type="text" name="prenom" placeholder="Prénom" required class="form-control mb-3">
                <input type="email" name="email" placeholder="Email" required class="form-control mb-3">
                <input type="tel" name="telephone" placeholder="Téléphone" required class="form-control mb-3">
                <input type="password" name="password" placeholder="Mot de passe" required class="form-control mb-3">
                <input type="password" name="password_confirmation" placeholder="Confirmation du Mot de passe" required class="form-control mb-3">
                <button type="submit" class="btn btn-success w-100">S'inscrire</button>
            </form>
            <a href="/" class="btn btn-outline-secondary w-100 mt-3 text-center">Retour à l'accueil</a>
        </div>
    </div>

    <!-- Formulaire de connexion -->
    <div id="connexion-form" class="form-overlay">
        <div class="form-box">
            <button class="btn-close" id="close-connexion">&times;</button>
            <h2>Se connecter</h2>
            <form id="connexionForm">
                @csrf
                <input type="email" name="email" placeholder="Email" required class="form-control mb-3">
                <input type="password" name="password" placeholder="Mot de passe" required class="form-control mb-3">
                <button type="submit" class="btn btn-success w-100">Se connecter</button>
            </form>
            <a href="/" class="btn btn-outline-secondary w-100 mt-3 text-center">Retour à l'accueil</a>
        </div>
    </div>

    <script>
        // Fonction pour afficher/fermer les formulaires
        function toggleForm(formId) {
            document.getElementById(formId).style.display = document.getElementById(formId).style.display === 'flex' ? 'none' : 'flex';
        }

        // Gérer l'affichage du formulaire d'inscription
        document.getElementById('btn-inscription').addEventListener('click', function() {
            toggleForm('inscription-form');
        });

        // Gérer l'affichage du formulaire de connexion
        document.getElementById('btn-connexion').addEventListener('click', function() {
            toggleForm('connexion-form');
        });

        // Fermer les formulaires
        document.getElementById('close-inscription').addEventListener('click', function() {
            toggleForm('inscription-form');
        });
        document.getElementById('close-connexion').addEventListener('click', function() {
            toggleForm('connexion-form');
        });

        // Soumettre les formulaires avec Fetch (inscription)
        document.getElementById('inscriptionForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(this);
            fetch("{{ route('register.submit') }}", {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = "/"; 
                } else {
                    alert(data.message);
                }
            })
            .catch(error => alert("Erreur lors de l'inscription. Essayez encore."));
        });

   
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
