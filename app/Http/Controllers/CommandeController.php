<?php

namespace App\Http\Controllers;

use App\Http\Requests\commandeRequest;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commandes = Commande::where('user_id', '=', Auth::user()->id);
        return view('Commande.list', [
            'commandes' => $commandes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Commande.create');
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
            'numeroCommande' => $request->numeroCommande,
            'couleur' => $request->couleur,
        ];


        Commande::create($data);
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
