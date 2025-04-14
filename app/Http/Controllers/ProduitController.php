<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Client;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index() {
        $produits = Produit::with('client')->get();
        $clients = Client::all();
        return view('produits.index', compact('produits', 'clients'));
    }

    public function store(Request $request) {
        Produit::create($request->validate([
            'nom' => 'required',
            'prix' => 'required|numeric',
            'client_id' => 'required|exists:clients,id'
        ]));
        return redirect()->back();
    }

    public function destroy(Produit $produit) {
        $produit->delete();
        return redirect()->back();
    }
}

