@extends('layout.base')

@if (Auth::user()->is_admin === 1)
@include('components.AdminNavBar')
@elseif(Auth::user()->is_admin === 'false')
@include('Components.Nav_bar')
@endif

<div class="gallery_section layout_padding">
    <div class="container my-5">
        <table width="100%">
            <tr>
                <td>
                    <h2>Liste des commandes</h2>
                </td>
                {{-- <td class="text-right">
                    <a href="{{ route('commande.create', ['id' => $car->id]) }}" class="btn btn-primary">
                        Créer
                    </a>
                </td> --}}
            </tr>
        </table><br />
        @if ($errors->any())
                        <ul class="alert alert-danger">
                            {!! implode('', $errors->all('<li>:message</li>')) !!}
                        </ul>
                    @endif

                    @if ($message = Session::get('error'))
                        <ul class="alert alert-danger">
                            <li>{{ $message }}</li>
                        </ul>
                    @endif

                    @if ($message = Session::get('success'))
                        <ul class="alert alert-success">
                            <li>{{ $message }}</li>
                        </ul>
                    @endif
        
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
                            <th>validation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($commandes as $commande)
                            <tr>
                                <td>{{ $commande->id }}</td>
                                <td>{{ $commande->numeroCommande }}</td>
                                <td>{{ $commande->couleur }}</td>
                                <td>{{ $commande->mode_paiment->type ?? 'Non spécifié' }}</td>
                                <td class="text-center">
                                    <a href="{{ route('commandes.show', $commande->id) }}" class="icon-button primary">
                                        <i class="fas fa-eye"></i> Voir
                                    </a>
                                    &nbsp;
                                    <form class="d-inline" action="{{ route('commandes.destroy', $commande->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr(e) de vouloir supprimer cette commande ? Cette action est irréversible !')">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash"></i> Supprimer
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ route('orders.validate', $commande->id) }}" class="btn btn-success" onclick="return confirm('Êtes-vous sûr de vouloir valider cette commande ?')">
                                        Valider la commande
                                    </a>
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
