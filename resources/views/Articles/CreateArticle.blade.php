<!-- resources/views/cars/create.blade.php -->
{{-- @extends('layout.base') --}}

{{-- @include('Components.Nav_bar') --}}
<style>
    .Formcontainer {
        max-width: 600px;
        margin: 30px auto;
        padding: 20px;
        background-color: #751212;
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
        font-size: 1.8em;
        font-weight: 600;
    }

    .car-form .form-group {
        margin-bottom: 15px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* align-items: center; */
    }

    .car-form label {
        font-weight: 500;
        color: #555;
        margin-bottom: 5px;
        display: block;
    }

    .car-form .form-control {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
        
        font-size: 1em;
        color: #333;
    }

    .car-form .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);
    }

    .car-form input[type="file"] {
        padding: 7px;
    }

    .btn-primary {
        width: 100%;
        padding: 12px;
        font-size: 1em;
        font-weight: bold;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>
<div class="Formcontainer">
    <div id="form-div">
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
    <form action="{{ route("cars.store") }}" method="POST" enctype="multipart/form-data" class="car-form">
        @csrf
        <h2>Publication d'articles</h2>

        <!-- Champs pour les informations de la voiture -->
        <div class="form-group">
            <label for="marque ">Marque </label><br />
            <input type="text" class="form-control" id="marque" name="marque" >
        </div>
        
        <div class="form-group">
            <label for="description">Description</label><br />
            <textarea class="form-control" id="description" name="description" rows="3" ></textarea>
        </div>

        <div class="form-group">
            <label for="price">Prix</label><br />
            <input type="number" class="form-control" id="price" name="price" >
        </div>

        <div class="form-group">
            <label for="model">Modèle</label><br />
            <input type="text" class="form-control" id="model" name="model" >
        </div>

        <div class="form-group">
            <label for="make">Marque</label><br />
            <input type="text" class="form-control" id="make" name="make" >
        </div>

        <div class="form-group">
            <label for="year">Année</label><br />
            <input type="number" class="form-control" id="year" name="year" >
        </div>

        <!-- Upload des images -->
        <div class="form-group">
            <label for="images">Images de la voiture</label><br />
            <input type="file" class="form-control" id="images" name="images[]" multiple>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter la voiture</button>
    </form>
</div>
{{-- @include('Components.Footer') --}}

<!-- CSS Styling -->

{{-- @endsection --}}
