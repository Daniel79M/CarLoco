@extends('layout.base')
{{-- <style>
    .Inscription {
        padding: 20px;
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(90deg, #ebf0f1, #28c46b);
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .form_conataint {
        padding: 20px;
        border: solid #FFF;
        width: fit-content;
        height: fit-content;
        backdrop-filter: blur(30px);
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 30px;
        color: #000000;
    }

    .form_conataint form .les_inputs {
        padding: 10px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        column-gap: 20px;
    }

    .first_input,
    .seconde_input {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .input {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .input input {
        padding: 10px 10px;
        border-radius: 30px;
        width: 350px;
        height: 50px;
        border: none;
        background-color: #FFF;
    }

    .connect {
        width: 100%;
        float: left;
        color: #ffffff;
        font-size: 16px;
        padding: 8px 0px;
        text-transform: uppercase;
        background-color: #28a745;
        text-align: center;
        border-radius: 3px;
    }

    .input label {
        font-size: 20px;
        font-weight: bold;
    }
</style> --}}

<section class="Inscription">
    <div id="" class="form_conataint">
        <div class="submit">
            <h4>Inscription</h4>
            <p>Renseignez vos informations pour vous inscrire</p>
        </div>
        <form action="{{ route('singIn') }}" method="POST">
            @csrf
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
            <div class="les_inputs">
                <div class="first_input">

                    <div class="form-group">
                        <label for="nom">Nom</label><br>
                        <input type="text" id="nom" name="nom" placeholder="Saisir votre nom ici"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label><br>
                        <input type="email" id="email" name="email" placeholder="Saisir l'adresse e-mail ici" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="address">Address</label><br>
                        <input type="text" id="address" name="address" placeholder="Saisir votre adresse ici" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de Passe</label><br>
                        <input type="password" id="password" name="password"
                            placeholder="Saisir votre mot de passe ici" class="form-control">
                    </div>

                </div>

                <div class="seconde_input">

                    <div class="form-group">
                        <label for="prenoms">Prénoms</label><br>
                        <input type="text" id="prenoms" name="prenoms" placeholder="Saisir votre prénoms ici" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="numero">Numero de téléphone</label><br>
                        <input type="text" id="numero" name="numero"
                            placeholder="Saisir votre numero de télephone ici" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="ville">Ville</label><br>
                        <input type="text" id="ville" name="ville" placeholder="Saisir votre ville ici" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="confirpassword">Confirmation de Mot de passe</label><br>
                        <input type="password" id="confirpassword" name="password_confirmation"
                            placeholder="confirmer votre mot de passe ici" class="form-control">
                    </div>

                </div>
            </div>

            <button type="submit" class="connect">Submit</button><br>

            <span>Vous n'avez pas de compte  <a href="{{ route('login') }}">Se connecter</a></span> 
        </form>
        
    </div>

</section>
