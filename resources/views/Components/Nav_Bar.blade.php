@extends('layout.base')

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Car<span>Loco</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('Welcome') }}" class="nav-link">Accueil</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">A propos</a></li>
                <li class="nav-item"><a href="" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="{{ route('showCar') }}" class="nav-link">Voitures</a></li>
                <li class="nav-item"><a href="{{ route('blogPage') }}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="" class="nav-link">Contact</a></li>&nbsp;&nbsp;
                <li class="nav-item subscribe_bt1">
                    <form action="{{ route('logout') }}" method="POST" class="nav-link">
                        @csrf
                        {{-- <div class="subscribe_bt2"><a href="{{ route('login') }}">Connexion</a></div> --}}
                        <button type="submit" class="subscribe_bt1">  Se deconnecter  </button>
                    </form>
                </li>&nbsp;&nbsp;
                {{-- <li class="nav-item"><div class="subscribe_bt2"><a href="#">Inscription</a></div></li> --}}
                

            </ul>
        </div>
    </div>
</nav>