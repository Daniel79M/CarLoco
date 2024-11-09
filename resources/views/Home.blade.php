@extends('layout.base')



<div>
    @if (Auth::user()->is_admin === 1)
        @include('components.AdminNavBar')
    @elseif(Auth::user()->is_admin === 'false')
        @include('Components.Nav_bar')
    @endif
    {{-- @include('Components.Nav_bar') --}}


    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                <div class="col-lg-8 ftco-animate">
                    <div class="text w-100 text-center mb-md-5 pb-md-5">
                        <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
                        <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it
                            with
                            the
                            necessary regelialia. It is a paradisematic country, in which roasted parts</p>
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
                <div class="heading-section heading-section-white pl-md-5">
                    <span class="subheading">About us</span>
                    <h2 class="mb-4">Welcome to Carbook</h2>

                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        It
                        is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it
                        would have been rewritten a thousand times and everything that was left from its origin
                        would be
                        the word "and" and the Little Blind Text should turn around and return to its own, safe
                        country.
                        A small river named Duden flows by their place and supplies it with the necessary
                        regelialia. It
                        is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <p><a href="#" class="btn btn-info py-3 px-4">Search Vehicle</a></p>
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
                            <p class="d-flex mb-0 d-block">
                                <a href="#" class="btn btn-info py-2 mr-1"> Acheter</a> 
                                <a href="{{ route('cars.show', $car->id) }}"class="btn btn-secondary py-2 ml-1">Voir +</a></p>
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
                <h2 class="mb-3">Our Latest Services</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="flaticon-wedding-car"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">Wedding Ceremony</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="flaticon-transportation"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">City Transfer</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="flaticon-car"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">Airport Transfer</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="flaticon-transportation"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">Whole City Tour</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('Components.Footer')
