<?php

namespace App\Http\Controllers;

use App\Http\Requests\commandeRequest;
use App\Models\Commande;
use App\Models\ModePaiment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */ 
public function index()
{
    // Définir des données statiques pour les commandes
    $commandes = collect([
        (object) [
            'id' => 1,
            'numeroCommande' => '12345678',
            'couleur' => 'Rouge',
            'modePaiement' => (object) ['name' => 'Carte bancaire'],
        ],
        (object) [
            'id' => 2,
            'numeroCommande' => '23456789',
            'couleur' => 'Bleu',
            'modePaiement' => (object) ['name' => 'PayPal'],
        ],
        (object) [
            'id' => 3,
            'numeroCommande' => '34567890',
            'couleur' => 'Noir',
            'modePaiement' => (object) ['name' => 'Espèces'],
        ]
    ]);

    return view('Commande.list', [
        'commandes' => $commandes
    ]);
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mode_paiement = ModePaiment::all();
        return view('Commande.create', [
            'mode_paiments' => $mode_paiement,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(commandeRequest $request)
    {
        $data = [
            'mode_paiement_id' => $request->mode_paiement_id,
            'user_id' => $request->user_id,
            'car_id' => $request->car_id,
            'numeroCommande' => rand(11111111, 99999999),
            // 'numeroCommande' => $request->numeroCommande,
            'couleur' => $request->couleur,
        ];
        Commande::create($data);

        return back()->withSuccess('Opération effectué. vous receverez un mail de validation ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Commande::findOrFail($id)->delete();
    }
}
