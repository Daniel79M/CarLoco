@extends('layout.base')

@if (Auth::user()->is_admin === 1)
    @include('components.AdminNavBar')
@elseif(Auth::user()->is_admin === 'false')
    @include('Components.WelcomeNav_bar')
@endif

<div class="gallery_section layout_padding">
    <div class="container my-5">
        <table width="100%">
            <tr>
                <td>
                    <h2>Liste des commandes</h2>
                </td>
                <td class="text-right">
                    <a href="{{ route('commandes.create') }}" class="btn btn-primary">
                        Créer
                    </a>
                </td>
            </tr>
        </table><br />
        
        <div class="table-responsive">
            @if ($commandes->isEmpty())
                <p>Aucune commande à afficher.</p>
            @else
                <p>Commandes trouvées : {{ $commandes->count() }}</p> <!-- Affiche le nombre de commandes -->
                <table class="table table-striped table-hover table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Numéro de commande</th>
                            <th>Couleur</th>
                            <th>Mode de paiement</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($commandes as $commande)
                            <tr>
                                <td>{{ $commande->id }}</td>
                                <td>{{ $commande->numeroCommande }}</td>
                                <td>{{ $commande->couleur }}</td>
                                <td>{{ $commande->modePaiement->name ?? 'Non spécifié' }}</td>
                                <td class="text-center">
                                    <a href="{{ route('commandes.show', $commande->id) }}" class="icon-button primary">
                                        <i class="fas fa-eye"></i> Voir
                                    </a>
                                    &nbsp;
                                    <form class="d-inline" action="{{ route('commandes.destroy', $commande->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr(e) de vouloir supprimer cette commande ? Cette action est irréversible !')">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="icon-button error">
                                            <i class="fas fa-trash"></i> Supprimer
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>

@include('Components.Footer')
