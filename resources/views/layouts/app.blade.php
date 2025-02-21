<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bienvenue')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            shadow:p-2 mb-5 bg-body-tertiary rounded;
        }
        .navbar {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-weight: bold;
            color: #0d6efd;
        }
        .navbar-nav .nav-link {
            color: #333;
            transition: color 0.2s;
        }
        .navbar-nav .nav-link:hover {
            color: #0d6efd;
        }
        .dropdown-menu {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-left: 55%
        }
        .btn-outline-success {
            border-radius: 20px;
        }
        .btn-outline{
          border-radius: 20px;
          color: rgb(181, 20, 20)
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
                
                    <a class="nav-link" href="{{ route('profile.show') }}">Mon Profil</a>
                
                  <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Catégories
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                      <li class="dropdown-header">Cours</li>
                      <li><a class="dropdown-item" href="{{ route('cours.laravel') }}">Laravel</a></li>
                      <li><a class="dropdown-item" href="{{ route('cours.react') }}">React.js</a></li>
                      
                      <li><hr class="dropdown-divider"></li>
                      
                      <li class="dropdown-header">TP</li>
                      <li><a class="dropdown-item" href="{{ route('tp.laravel') }}">Code Laravel</a></li>
                      <li><a class="dropdown-item" href="{{ route('tp.react') }}">Code React.js</a></li>
                  </ul>
              
                 <!-- Dans votre fichier HTML existant -->
    <a class="nav-link" href="{{ route('users.index') }}">Liste des Utilisateurs</a>   
            </ul>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        @yield('content')
    </div>
</body>
</html>
