@extends('layout.base')

@if (Auth::user()->is_admin === 1)
    @include('components.AdminNavBar')
@elseif(Auth::user()->is_admin === 'false')
    @include('Components.WelcomeNav_bar')
@endif

<div class="about_section layout_padding">
    <div class="container my-5">
        <h2 class="text-center mb-4">À propos de notre plateforme</h2>
        
        <div class="row">
            <div class="col-md-6">
                <h3>Qui sommes-nous ?</h3>
                <p>Nous sommes une entreprise innovante spécialisée dans la location et la vente d'engins et de voitures. Notre objectif est de faciliter l'accès à une large gamme de véhicules adaptés à vos besoins, que ce soit pour un usage professionnel ou personnel.</p>
                <p>Notre plateforme permet de louer ou acheter des véhicules avec une grande simplicité, tout en vous garantissant des services de qualité et une expérience utilisateur optimale.</p>
            </div>
            <div class="col-md-6">
                <h3>Notre Mission</h3>
                <p>Notre mission est de rendre les véhicules spécialisés facilement accessibles à tous. Nous nous engageons à offrir un service rapide, fiable et à des prix compétitifs, tout en mettant l'accent sur la satisfaction client et la sécurité de nos produits.</p>
                <p>Nous mettons à votre disposition un site e-commerce simple à utiliser, qui vous permet de trouver rapidement le véhicule dont vous avez besoin, de réserver en ligne et de choisir le mode de paiement qui vous convient.</p>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-12">
                <h3>Nos Valeurs</h3>
                <ul>
                    <li><strong>Fiabilité :</strong> Nous nous engageons à vous fournir des véhicules de qualité et un service sans faille.</li>
                    <li><strong>Accessibilité :</strong> Notre plateforme est conçue pour être accessible à tous, avec une interface conviviale.</li>
                    <li><strong>Responsabilité :</strong> Nous nous efforçons de respecter des pratiques durables et responsables dans toutes nos opérations.</li>
                </ul>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <h3>Contactez-nous</h3>
                <p>Si vous avez des questions ou des demandes spécifiques, n'hésitez pas à nous contacter via notre page de  Nous serons ravis de vous répondre !</p>
            </div>
        </div>
    </div>
</div>

@include('Components.Footer')
