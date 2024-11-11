@extends('layout.base')

@if (Auth::user()->is_admin === 1)
@include('components.AdminNavBar')
@elseif(Auth::user()->is_admin === 'false')
@include('Components.WelcomeNav_bar')
@endif

    <br /><br />
    <div class="wrap-content">


        <br /><br />
        <form action="{{ route('categories.store') }}" method="POST" class="container mt-5 p-4 border rounded shadow-sm bg-light">

            @csrf
            <h1 class="mb-4 text-center">Créer une nouvelle catégorie</h1>
            <p class="text-center text-muted">Remplir les informations de la catégorie que vous voulez modifier.</p>
        
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        {!! implode('', $errors->all('<li>:message</li>')) !!}
                    </ul>
                </div>
            @endif
        
            @if ($message = Session::get("error"))
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <li>{{ $message }}</li>
                    </ul>
                </div>
            @endif
        
            @if ($message = Session::get("success"))
                <div class="alert alert-success">
                    <ul class="mb-0">
                        <li>{{ $message }}</li>
                    </ul>
                </div>
            @endif
        
            <div class="mb-3">
                <label for="name" class="form-label"><b>Nom de la catégorie</b></label>
                <input type="text" class="form-control" placeholder="Nom de la catégorie ..." id="name" minlength="3" maxlength="128"
                       name="name"  />
            </div>
        
            <div class="mb-3">
                <label for="description" class="form-label"><b>Description</b> <small class="text-muted">[Facultatif]</small></label>
                <textarea name="description" id="description" rows="3" class="form-control" placeholder="Saisir la description ..."></textarea>
            </div>
        
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Soumettre</button>
            </div>
        </form>
        

    </div>
    <br />
    @include('Components.Footer')
