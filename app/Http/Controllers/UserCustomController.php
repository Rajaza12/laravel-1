<?php

namespace App\Http\Controllers;

use App\Models\UserCustom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserCustomController extends Controller
{
    // Affichage de la liste des utilisateurs
    public function index()
    {
        $users = UserCustom::all(); // Récupère tous les utilisateurs
        return view('users.index', compact('users')); // Passe $users à la vue
    }
    
    // Création d'un nouvel utilisateur
    public function store(Request $request)
    {
        // Validation des champs
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'telephone' => 'required|string|min:10',
            'password' => 'required|string|min:8|confirmed',
        ]);
    

        
    
  
        
    
    
        // Redirection sans message spécifique
        return response()->json([], 201);  // Pas de message de succès ni d'erreur
    }
    

    // Affichage du formulaire d'édition
    public function edit($id)
    {
        $user = UserCustom::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    // Mise à jour d'un utilisateur
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nom'       => 'required|string|max:255',
            'prenom'    => 'required|string|max:255',
            'email'     => 'required|email', // ❌ Suppression de "unique"
            'telephone' => 'required|string|max:15',
        ]);

        $user = UserCustom::findOrFail($id);
        $user->update($validatedData);

        return redirect()->route('user.index')->with('success', 'Utilisateur modifié avec succès.');
    }

    // Suppression d'un utilisateur
    public function destroy($id)
    {
        UserCustom::findOrFail($id)->delete();
        return redirect()->route('user.index')->with('success', 'Utilisateur supprimé avec succès.');
    }

    // Connexion d'un utilisateur
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $user = UserCustom::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            return response()->json(['success' => true, 'message' => 'Connexion réussie.', 'user' => $user]);
        }

        return response()->json(['success' => false, 'message' => 'Email ou mot de passe incorrect.'], 401);
    }
}
