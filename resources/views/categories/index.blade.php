@extends('layout.base')

@if (Auth::user()->is_admin === 1)
@include('components.AdminNavBar')
@elseif(Auth::user()->is_admin === 'false')
@include('Components.WelcomeNav_bar')
@endif

    <div class="gallery_section layout_padding">
        <div class="container my-5">
            {{-- <h1 class="text-center mb-4">Liste des catégories</h1> --}}
            <table width="100%">
                <tr>
                    <td>
                        <h2>Liste des catégories</h2>
                    </td>
                    <td class="text-right">
                        <a href="{{ route('categories.create') }}" class="btn btn-primary">
                            Créer
                        </a>
                    </td>
                </tr>
            </table><br />
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead  class="thead-dark">
                        <tr>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>
                                Opérations
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>
                                    {{ $category->name }}
                                </td>
                                <td>
                                    {!! $category->description == null
                                        ? "<span class='text-muted'>Pas de description.</span>"
                                        : $category->description !!}
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('categories.edit', $category->id) }}" class="icon-button primary">
                                        <i class="fas fa-pen-to-square"></i>
                                    </a>
                                    &nbsp;
                                    <form class="d-inline" action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr(e) de vouloir supprimer la catégorie {{ $category->name }} ? Cette action sera irréversible !')">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="icon-button error">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('Components.Footer')
