@extends('layout.base')

<section class="ConnectContaint">
    <div id ="main">
        <div class="row">

            <div id="form-div">
                <h4>Bienvenu sur </h4>
                <h1 class="connectLogo" ><a class="navbar-brand">Car<span>Loco</span></a></h1>
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
            <h4>Renseignez vos informations de Connexion pour vous connectez</h4>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email"
                            name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter le mot de pass"
                            name="password">
                    </div>                 
                        <button type="submit" class="connect">Submit</button><br>

                    <span>Vous n'avez pas de compte  <a href="{{ route('singIn') }}">S'inscrire</a></span> 
                    
                </form>
            </div>
        </div>
    </div>

</section>


