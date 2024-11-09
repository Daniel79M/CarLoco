@extends('layout.base')

@if (Auth::user()->is_admin === 1)
@include('components.AdminNavBar')
@elseif(Auth::user()->is_admin === 'false')
@include('Components.Nav_bar')
@endif

{{-- <br /><br /><br /> --}}
<div class="gallery_section layout_padding">

    <section class="contentDe">
        <div class="containe my-5">
            <div class="car-detail">
                <div class="car-imagesDe">
                    @foreach ($car->images as $image)
                    <img src="{{ asset('storage/' . $image->image_path) }}" alt="Image de {{ $car->title }}"
                    class="car-image">
                    @endforeach
                </div>
                <div class="car-infoDe">
                    <div class="profile-details">
                        <p>Détails de la Voiture </p>
                        <p><strong>Modèle :</strong> {{ $car->model }}</p>
                        <p><strong>Marque :</strong> {{ $car->make }}</p>
                        <p><strong>Année :</strong> {{ $car->year }}</p>
                        <p><strong>Prix :</strong>{{ number_format($car->price, 2) }} FCFA</p>
                        <p><strong>Description :</strong> {{ $car->description }}</p>

                    </div>
                    <p class="d-flex mb-0 d-block"><a href="{{ route('commandes.create') }}" class="btn btn-secondary py-2 mr-1">
                        Commander</a>
                         {{-- <a href="{{ route('cars.show', $car->id) }}"
                        class="btn btn-info py-2 ml-1"></a> --}}
                </p>
                </div>
            </div>
        </div>

    </section>
</div>
@include('Components.Footer')

