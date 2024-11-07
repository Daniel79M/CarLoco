<!-- resources/views/cars/show.blade.php -->


<div class="container">
    <h2>Détails de la Voiture : {{ $car->marque }} {{ $car->model }}</h2>
    <div class="car-detail">
        <div class="car-images">
            @foreach ($car->images as $image)
                <img src="{{ asset('storage/' . $image->image_path) }}" alt="Image de {{ $car->title }}" class="car-image">
            @endforeach
        </div>
        
        <div class="car-info">
            <p><strong>Modèle :</strong> {{ $car->model }}</p>
            <p><strong>Marque :</strong> {{ $car->make }}</p>
            <p><strong>Année :</strong> {{ $car->year }}</p>
            <p><strong>Prix :</strong>{{ number_format($car->price, 2) }} FCFA</p>
            <p><strong>Description :</strong> {{ $car->description }}</p>
        </div>
    </div>
</div>

<style>
    .container {
        max-width: 800px;
        margin: 30px auto;
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    .car-detail {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .car-images {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 10px;
    }

    .car-image {
        width: 100%;
        height: 200px;
        border-radius: 5px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .car-info {
        background-color: #f9f9f9;
        padding: 15px;
        border-radius: 8px;
        border: 1px solid #ddd;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .car-info p {
        font-size: 1.1em;
        color: #555;
    }

    .car-info strong {
        color: #333;
    }
</style>

