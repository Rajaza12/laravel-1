<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request) {
        $search = $request->input('search');
        $clients = Client::where('nom', 'like', "%$search%")
            ->orWhere('email', 'like', "%$search%")
            ->get();
        return view('clients.index', compact('clients', 'search'));
    }

    public function store(Request $request) {
        Client::create($request->validate([
            'nom' => 'required',
            'email' => 'required|email|unique:clients',
            


        ]));
      
        
        
       
    
        return redirect()->back();

    }

    public function destroy(Client $client) {
        $client->delete();
        return redirect()->back();
    }
}
