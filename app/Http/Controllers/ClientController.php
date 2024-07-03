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
    
}
