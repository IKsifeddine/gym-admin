<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\SportCategorie;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    // afficher la liste dais clients 
    public function index()
    {
        $clients = Client::paginate(8);
        return view('dashboard', compact('clients'));
    }
    // chercher les clients par leur cin 
    public function search(Request $request)
    {
        $cin = $request->input('cin');

        $clients = Client::where('cin', $cin)->paginate();

        return view('dashboard', compact('clients'));
    }
    public function create()
    {
        $sportCategories = SportCategorie::all();
        return view('clients.create', compact('sportCategories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'adress' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',
            'cin' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'sport_categories_id' => 'required|exists:sport_categories,id', // Validation for existing sport category ID
            'status' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048', // Max file size 2MB for photo
        ]);
    
        $client = new Client;
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->adress = $request->adress;
        $client->telephone = $request->telephone;
        $client->cin = $request->cin;
        $client->email = $request->email;
        $client->sport_categories_id = $request->sport_categories_id;
        $client->status = $request->status;
    
        if ($request->hasFile('photo')) {
            $client->photo = $request->file('photo')->store('photos', 'public');
        }
    
        $client->save();
    
        return redirect()->route('dashboard')->with('success', 'Client ajouté avec succès.');
    }
    
}
