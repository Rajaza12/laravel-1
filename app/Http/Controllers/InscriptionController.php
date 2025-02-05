<?php

namespace App\Http\Controllers;
use App\Models\Inscription;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function create()
    {
        
        return view('inscription.create');
    }

    // Enregistrer 
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email|unique:inscriptions',
            'telephone' => 'required',
        ]);

        Inscription::create($request->all());

        return redirect()->route('inscription.index')
                         ->with('success', 'Inscription créée avec succès.');
    }

    // Afficher 
    public function index()
    {
        $inscriptions = Inscription::all();
        return view('inscription.index', compact('inscriptions'));
    }

    // Supprimer 
    public function destroy(Inscription $inscription)
    {
        $inscription->delete();

        return redirect()->route('inscription.index')
                         ->with('success', 'Inscription supprimée avec succès.');
    }
}
