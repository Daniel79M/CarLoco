<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class PageControllers extends Controller
{
    public function showCar(Request $request){

        $voitures = Car::query();
    
        if ($request->filled('categorie')) {
            $voitures->where('categorie', $request->categorie);
        }
    
        if ($request->filled('marque')) {
            $voitures->where('marque', $request->marque);
        }
    
        if ($request->filled('annee')) {
            $voitures->where('annee', $request->annee);
        }
    
        if ($request->filled('modele')) {
            $voitures->where('modele', $request->modele);
        }
    
        $voitures = $voitures->get();

        $cars = Car::with('images')->get();
    
        return view('cars.index', [
            'cars' => $cars,
            'voitures' => $voitures,
        ]);
    }
}
