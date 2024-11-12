<!-- Affichage des Résultats -->
@extends('layout.base')

@if (Auth::user()->is_admin === 1)
@include('components.AdminNavBar')
@elseif(Auth::user()->is_admin === 'false')
@include('Components.Nav_bar')
@endif
<br /><br /><br />

{{-- <div class="container my-5">
    <h3 class="text-center mb-4">Résultats de la recherche</h3>
    @if($voitures->isEmpty())
        <p class="text-center">Aucune voiture ne correspond à votre recherche.</p>
    @else
        <div class="row">
            @foreach($voitures as $voiture)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="{{ asset('storage/' . $voiture->images->first()) }}"
                                        alt="Image de " class="car-thumbnail">
                        <div class="card-body">
                            <h5 class="card-title">{{ $voiture->model }} - {{ $voiture->marque }}</h5>
                            <p class="card-text">
                                Catégorie : {{ $voiture->categorie }}<br>
                                Année : {{ $voiture->year }}
                            </p>
                            <a href="{{ route('cars.show', $voiture->id) }}" class="btn btn-primary">Voir Détails</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div> --}}
    <!-- Formulaire de Filtrage des Voitures -->

<div class="container my-5">
    <div class="card p-4 shadow-sm">
        <h3 class="text-center mb-4">Rechercher une voiture</h3>
        <form action="{{ route('search') }}" method="GET">
            <div class="row">
                <!-- Champ de Filtrage par Catégorie -->
                {{-- <div class="col-md-3 mb-3 text-center">
                    <label for="categorie" class="form-label">Catégorie</label><br />
                    <input type="text" name="categorie" id="marque" class="form-control" placeholder="votre choix">
                </div> --}}

                <!-- Champ de Filtrage par Marque -->
                <div class="col-md-3 mb-3 text-center">
                    <label for="marque" class="form-label">Marque</label><br />
                    <input type="text" name="marque" id="marque" class="form-control" placeholder="votre choix">
                    
                </div>
            </div>
            <div class="row">
                <!-- Champ de Filtrage par Année -->
                <div class="col-md-3 mb-3 text-center">
                    <label for="annee" class="form-label">Année</label><br />
                    <input type="text" name="annee" id="année" class="form-control" placeholder="votre choix">
                </div>

                <!-- Champ de Filtrage par Modèle -->
                <div class="col-md-3 mb-3 text-center">
                    <label for="modele" class="form-label">Modèle</label><br />
                    <input type="text" name="modele" id="model" class="form-control" placeholder="votre choix">
                </div>
            </div>

            <!-- Bouton de Recherche -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-3">Rechercher</button>
            </div>
        </form>
    </div>
</div>

<div class="gallery_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="gallery_taital">Liste des Voitures à Vendre</h1>
            </div>
        </div>
        <div class="gallery_section_2">
            <div class="row">
                @foreach ($cars as $car)
                    <div class="col-md-4">
                        <div class="gallery_box">
                            <div class="gallery_img">
                                @if ($car->images->isNotEmpty())
                                    <img src="{{ asset('storage/' . $car->images->first()->image_path) }}"
                                        alt="Image de {{ $car->title }}" class="car-thumbnail">
                                @else
                                    <img src="{{ asset('images/bg_2.jpg') }}" alt="Image par défaut"
                                        class="car-thumbnail">
                                @endif
                            </div>
                            <h3 class="types_text">{{ $car->marque }}</h3>
                            <p class="looking_text"><strong>Prix :</strong> {{ number_format($car->price, 2) }}FCFA</p>
                            <p><strong>Modèle :</strong> {{ $car->model }} | <strong>Année :</strong>
                                {{ $car->year }}</p>
                            <p class="d-flex mb-0 d-block">
                                <a href="#" class="btn btn-info py-2 mr-1"> Acheter</a>
                                <a href="{{ route('cars.show', $car->id) }}"class="btn btn-secondary py-2 ml-1">Voir
                                    +</a>
                            </p>
                            {{-- <div class="read_bt"><a href="{{ route('cars.show', $car->id) }}" class="btn btn-info">Voir Détails</a></div> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

    