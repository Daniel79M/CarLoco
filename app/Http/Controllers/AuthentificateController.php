<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthentificateController extends Controller
{
    public function showLoginForm()
    {
        // $commande = Commande::create( [
        //     'mode_paiement_id' => 1,
        //     'user_id' => 1,
        //     'car_id' => 2,
        //     'numeroCommande' => rand(11111111, 99999999),
        //     'couleur' => 'blue',
        // ]);
        return view('Auth.Connexion');
        // return $commande;
    }

    public function showSignInForm()
    {
        return view('Auth.Inscription');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            // Rediriger l'utilisateur en fonction de son statut
                return redirect()->route('Welcome'); 
        }
        // Si la tentative de connexion échoue, retourner une erreur
        return redirect()->route('login')->withErrors([
            'email' => 'Les informations de connexion sont incorrectes.',
        ])->withInput($request->only('email'));
    }

    public function home()  
    {

        $cars = Car::with('images')->get();

        return view('welcome', compact('cars'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }

}


