@extends('layout.base')

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('Welcome') }}">Car<span>Loco</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
<<<<<<< HEAD
<<<<<<< HEAD
                <li class="nav-item active"><a href="index.html" class="nav-link">Accueil</a></li>
=======
                <li class="nav-item active"><a href="{{ route('Welcome') }}" class="nav-link">Home</a></li>
>>>>>>> 21c55a658eef6e33bafcdab9333e89991d935ec9
=======


                <li class="nav-item active"><a href="{{ route('Welcome') }}" class="nav-link">Accueil</a></li>

>>>>>>> e28ca95703a7e0b2f12b56ccd3288d952f341753

                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">A propos</a></li>
                <li class="nav-item"><a href="{{ route('categories.index') }}" class="nav-link">Catégories</a></li>
                <li class="nav-item"><a href="{{ route('users.index') }}" class="nav-link">Utilisateurs</a></li>
                <li class="nav-item"><a href="{{ route('commandes.index') }}" class="nav-link">Les Commandes</a></li>
                <li class="nav-item"><a href="{{ route('cars.create') }}" class="nav-link">Pubier</a></li>&nbsp;&nbsp;
                <li class="nav-item subscribe_bt1">
                    <form action="{{ route('logout') }}" method="POST" class="nav-link">
                        @csrf
                        <button type="submit" class="subscribe_bt1">  Se deconnecter  </button>
                    </form>
                </li>&nbsp;&nbsp;
                {{-- <li class="nav-item"><div class="subscribe_bt2"><a href="#">Inscription</a></div></li> --}}
                

            </ul>
        </div>
    </div>
</nav> 