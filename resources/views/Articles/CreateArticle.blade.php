
@extends('layout.base')

@if (Auth::user()->is_admin === 1)
@include('components.AdminNavBar')
@elseif(Auth::user()->is_admin === 'false')
@include('Components.Nav_bar')
@endif

<div class="Formcontainer" >
    <div class="center">
    
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <br />
        <form action="{{ route("cars.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
    
            <div class="date">
                <div>
                    <label for="marque ">Marque </label><br />
                    <input type="text" class="form-control" id="marque" name="marque"  placeholder="Renseigner">
                </div>
    
                <div>
                    <label for="price">Prix</label><br />
                    <input type="number" class="form-control" id="price" name="price"  placeholder="Renseigner">
                </div>
    
                <div>
                    <label for="model">Modèle</label><br />
                    <input type="text" class="form-control" id="model" name="model"  placeholder="Renseigner">
                </div>
            </div>
    
            <div class="date">
                <div>
                    <label for="make">Marque</label><br />
                    <input type="text" class="form-control" id="make" name="make"  placeholder="Renseigner">
                </div>
    
                <div>
                    <label for="year">Année</label><br />
                <input type="number" class="form-control" id="year" name="year"  placeholder="Renseigner">
                </div>
    
                <div>
                    <label for="images">Images de la voiture</label><br />
                    <input type="file" class="form-control" id="images" name="images[]" multiple placeholder="Renseigner">
                </div>
            </div>
    
            <div class="description">
                <label for="description">Description</label><br />
                <textarea class="form-control" id="description" name="description" rows="3" ></textarea>
            </div><br />
            <button type="submit" class="btn btn-primary">Ajouter la voiture</button>
    
        </form>
    </div>
</div>
@include('Components.Footer')


