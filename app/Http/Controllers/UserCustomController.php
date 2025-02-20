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
        $users = UserCustom::all();
        return view('users.index', compact('users'));
    }

    // Création d'un nouvel utilisateur
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom'       => 'required|string|max:255',
            'prenom'    => 'required|string|max:255',
            'email'     => 'required|email|unique:user_customs,email',
            'telephone' => 'required|string|max:15',
            'password'  => 'required|string|min:6',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        UserCustom::create($validatedData);

        return response()->json(['success' => true, 'message' => 'Utilisateur créé avec succès.'], 201);
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
            'email'     => 'required|email|unique:user_customs,email,'.$id,
            'telephone' => 'required|string|max:15',
        ]);

        $user = UserCustom::findOrFail($id);
        $user->update($validatedData);

        return redirect()->route('users.index')->with('success', 'Utilisateur modifié avec succès.');
    }

    // Suppression d'un utilisateur (avec vérification)
    public function destroy($id)
    {
        $user = UserCustom::findOrFail($id);

        if (auth()->id() === $user->id) {
            return redirect()->route('users.index')->with('error', 'Vous ne pouvez pas vous supprimer vous-même.');
        }

        $user->delete();
        return redirect()->route('users.index')->with('success', 'Utilisateur supprimé avec succès.');
    }

    // Connexion d'un utilisateur
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $user = UserCustom::where('email', $credentials['email'])->first();

        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return response()->json(['success' => false, 'message' => 'Email ou mot de passe incorrect.'], 401);
        }

        Auth::login($user);
        return response()->json(['success' => true, 'message' => 'Connexion réussie.', 'user' => $user]);
    }
}
