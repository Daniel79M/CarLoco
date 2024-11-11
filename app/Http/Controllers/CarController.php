<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarImage;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::with('images')->get();
        return view('welcome', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Articles.CreateArticle');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'marque' => 'required|string|max:50',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'model' => 'required|string',
            'make' => 'required|string',
            'year' => 'required|integer',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[

        ]);

        // Créer la voiture
        $car = Car::create($request->only('marque', 'description', 'price', 'model', 'make', 'year'));

        // Sauvegarder les images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('car_images', 'public');
                CarImage::create([
                    'car_id' => $car->id,
                    'image_path' => $path,
                ]);
            }
        }

        return redirect()->route('Welcome')->with('success', 'Voiture ajoutée avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::with('images')->findOrFail($id);
        return view('Articles.DetailArticle', compact('car'));
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
/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    // Valider les données du formulaire
    $request->validate([
        'marque' => 'string|max:50',
        'description' => 'string',
        'price' => 'numeric',
        'model' => 'string',
        'make' => 'string',
        'year' => 'integer',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Trouver la voiture par son ID
    $car = Car::findOrFail($id);

    // Mettre à jour les informations de la voiture
    $car->update($request->only('marque', 'description', 'price', 'model', 'make', 'year'));

    // Si des images sont envoyées, les traiter
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $path = $image->store('car_images', 'public');
            CarImage::create([
                'car_id' => $car->id,
                'image_path' => $path,
            ]);
        }
    }

    return redirect()->route('Welcome')->with('success', 'Voiture mise à jour avec succès!');
}


    /**
     * Remove the specified resource from storage.
     */
/**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    $car = Car::findOrFail($id);

    // Supprimer les images associées à la voiture


    // Supprimer la voiture de la base de données
    $car->delete();

    // Rediriger vers la page d'accueil avec un message de succès
    return redirect()->route('Welcome')->with('success', 'Voiture supprimée avec succès!');
}

}
