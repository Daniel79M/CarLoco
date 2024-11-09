<?php

namespace App\Http\Controllers;

use App\Http\Requests\commandeRequest;
use App\Models\Car;
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
        if(Auth::user()->is_admin = true){
            $commandes = Commande::all();
            return view('Commande.list', [
                'commandes' => $commandes
            ]);
        }else{
            $commandes = Commande::where('user_id', '=', Auth::user()->id);
            return view('Commande.list', [
                'commandes' => $commandes
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $mode_paiements = ModePaiment::all();
        $car = Car::findOrFail($id);
        return view('Commande.create',[
            'mode_paiments' => $mode_paiements,
            'car_id' => $car->id
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
            'numeroCommande' => $request->numeroCommande,
            'couleur' => $request->couleur,
        ];

        Commande::create([
            'mode_paiement_id' => $data['mode_paiement_id'],
            'user_id' => Auth::user()->id,
            'car_id' => $data['car_id'],
            'numeroCommande' => rand(11111111, 99999999),
            'couleur' => $data['couleur']
        ]);

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
