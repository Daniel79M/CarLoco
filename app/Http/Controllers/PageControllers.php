<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Commande;
use Illuminate\Http\Request;

class PageControllers extends Controller
{
    public function showCar(Request $request){

        $cars = Car::with('images')->get();
    
        return view('cars.index', [
            'cars' => $cars,
            // 'voitures' => $voitures,
        ]);
    }

    public function validateOrder($id)
    {
        // Trouver la commande par son ID
        $order = Commande::findOrFail($id);

        if ($order->status === 'pending') {

            $order->status = 'validated';
            $order->save();

            return redirect()->back()->with('success', 'La commande a été validée avec succès.');
        } else {
            return redirect()->back()->with('error', 'La commande ne peut pas être validée.');
        }
    }

    public function blogPage(){
        return view('pages.blog');
    }
}
