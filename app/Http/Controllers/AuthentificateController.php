<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Commande;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthentificateController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view('users.index',
        ['users' => $users]);
    }

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
                return redirect()->route('Welcome', [
                    // 'voitures' => $voitures,
                ]); 
        }
        // Si la tentative de connexion échoue, retourner une erreur
        return redirect()->route('login')->withErrors([
            'email' => 'Les informations de connexion sont incorrectes.',
        ])->withInput($request->only('email'));
    }
    
    public function register(Request $request)
    {
        // Validation des champs
        $request->validate([
            'nom' => 'required|string|min:3|max:20',
            'prenoms' => 'required|string|min:3',
            'numero' => 'required|string|unique:users,numero|min:8',
            'address' => 'required|string|min:4',
            'ville' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:4|confirmed',
        ], [
            'nom.required' => 'Le nom est requis.',
            'nom.min' => 'Le nom doit contenir au moins 3 caractères.',
            'email.required' => 'L\'email est requis.',
            'email.unique' => 'Cet email existe déjà, veuillez le modifier.',
            'numero.unique' => 'Ce numéro existe déjà, veuillez le modifier.',
            'numero.required' => 'Le numéro est requis.',
            'ville.required' => 'La ville est requise.',
            'address.required' => 'L\'adresse est requise.',
            'password.required' => 'Le mot de passe est requis.',
            'password.confirmed' => 'Le mot de passe n\'est pas conforme.',
        ]);
    
        // Création de l'utilisateur
        $user = User::create([
            'nom' => $request->nom,
            'prenoms' => $request->prenoms,
            'numero' => $request->numero,
            'address' => $request->address,
            'ville' => $request->ville,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        // // Connexion de l'utilisateur après inscription
        // Auth::login($user);
    
        // Redirection vers la page de succès
        return redirect()->route('login')->withSuccess('Inscription validée');
    }
    


    public function home( Request $request)  
    {


        $cars = Car::with('images')->get();

        return view('Home', [
            'cars' => $cars,
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }

    public function search(Request $request)
    {
        $voitures = Car::query();

        $cars = Car::with('images')->get();
    
        if ($request->filled('price')) {
            $voitures->where('price', $request->price);
        }

        if ($request->filled('marque')) {
            $voitures->where('marque', $request->marque);
        }

        if ($request->filled('annee')) {
            $voitures->where('year', $request->annee);
        }

        if ($request->filled('modele')) {
            $voitures->where('model', $request->modele);
        }

        $voitures = $voitures->get();

        return view('cars.search', [
            'cars' => $cars,
            'voitures' => $voitures,
        ]);
    }

}


