@extends('layout.base')



<div>
   
        @include('Components.WelcomeNav_bar')


    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                <div class="col-lg-8 ftco-animate">
                    <div class="text w-100 text-center mb-md-5 pb-md-5">
                        <h1 class="mb-4">Avec Carloco, accéder à une voiture n’a jamais été aussi simple.</h1>
                        <p style="font-size: 18px;">Tout comme le voyageur qui prépare sa monture pour traverser de vastes contrées, équipez-vous de la voiture ou de l'engin parfait pour votre prochaine aventure.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section ftco-about">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url(images/about.jpg);">
            </div>
            <div class="col-md-6 wrap-about ftco-animate">
                <div class="heading-section heading-section-white pl-md-5"><br>
                    <span class="subheading">A propos</span>
                    <h2 class="mb-4">Bienvenue chez Carloco</h2>

                    <p>Votre partenaire de confiance pour la vente et la location de voitures et d'engins.</p>
                    <p>Carloco est une entreprise innovante spécialisée dans la vente et la location de voitures. Notre mission est de simplifier et moderniser votre expérience en ligne grâce à une plateforme intuitive qui vous offre un large choix de véhicules adaptés à vos besoins. Profitez de fonctionnalités avancées telles que des recommandations personnalisées et des visites virtuelles pour faciliter votre sélection. Chez CarLoco, nous mettons un point d'honneur à vous fournir un service fiable et de qualité pour que votre parcours soit simple, sécurisé et satisfaisant..</p>
                    <p><a href="#" class="btn btn-primary py-3 px-4">Recherche de Véhicle</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

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
                            {{-- <p class="looking_text">Start per day $4500</p> --}}
                            <p><strong>Modèle :</strong> {{ $car->model }} | <strong>Année :</strong>
                                {{ $car->year }}</p>
                            <p class="d-flex mb-0 d-block"><a href="{{ route('commande.create', ['id' => $car->id]) }}" class="btn btn-info py-2 mr-1">
                                    Acheter</a> <a href="{{ route('cars.show', $car->id) }}"
                                    class="btn btn-secondary py-2 ml-1">Plus de Détail</a>
                            </p>
                            {{-- <div class="read_bt"><a href="{{ route('cars.show', $car->id) }}" class="btn btn-info">Voir Détails</a></div> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Services</span>
                <h2 class="mb-3">Nos derniers Services</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="fa fa-truck" aria-hidden="true"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">Cérémonies de mariages</h3>
                        <p>Notre service client dévoué est là pour vous accompagner à chaque étape de votre aventure.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="fa fa-taxi" aria-hidden="true"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">Transport ville</h3>
                        <p>Notre service client dévoué est là pour vous accompagner à chaque étape de votre aventure.".
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="fa fa-car" aria-hidden="true"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">Transport depuis l'aeroport</h3>
                        <p>Notre service client dévoué est là pour vous accompagner à chaque étape de votre aventure.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="fa fa-bus" aria-hidden="true"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">Visite de la ville entière</h3>
                        <p>Notre service client dévoué est là pour vous accompagner à chaque étape de votre aventure.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('Components.Footer')
