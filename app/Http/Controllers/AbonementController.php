<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Abonement;
use Illuminate\Http\Request;
use App\Models\SportCategorie;

class AbonementController extends Controller
{
    public function create()
    {
        $sportCategories = SportCategorie::all();
        $clients = Client::all();
        return view('abonements.create', compact('sportCategories', 'clients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'sport_categories_id' => 'required|exists:sport_categories,id',
            'client_id' => 'required|exists:clients,id',
            'tarif_abonement' => 'required|numeric',
        ]);

        Abonement::create($request->all());

        return redirect()->route('abonements.create')->with('success', 'Abonnement created successfully.');
    }
}
