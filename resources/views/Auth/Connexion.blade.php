@extends('layout.base')

<section class="ConnectContaint">
    <div id ="main">
        <div class="row">
            {{-- <div id="side">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ URL::asset('images/Voiture_Toyota_3-removebg-preview.png') }}"
                                height="500px" width="100%">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ URL::asset('images/Voiture_Nissan_1-removebg-preview.png') }}"
                                height="500px" width="100%">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ URL::asset('images/Voiture_Lamborghini_4-removebg-preview.png') }}"
                                height="500px" width="100%">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div> --}}

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


