@extends('layout.base')

@if (Auth::user()->is_admin === 1)
@include('components.AdminNavBar')
@elseif(Auth::user()->is_admin === 'false')
@include('Components.Nav_bar')
@endif

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-8 block-9 mb-md-5">
                <form action="{{ route('commande.store')}}" class="bg-light p-5 contact-form" method="POST">

                    @csrf
                    @method('POST')

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
                    
                    <div class="form-group">
                        <input type="text" name="couleur" id="couleur" class="form-control" placeholder="couleur">
                    </div>
            </div>
                <div class="col-md-4">
                    <div class="row mb-5">
                        @foreach ($mode_paiments as $mode_paiment)
                            <div class="col-md-12">
                                <div class="border w-100 p-4 rounded mb-2 d-flex">
                                    <div class="icon mr-3">
                                        <input type="radio" name="mode_paiement_id" id="mode_paiement_{{ $mode_paiment->id }}" value="{{ $mode_paiment->id }}">
                                    </div>
                                    <label for="mode_paiement_{{ $mode_paiment->id }}">
                                        <p><span>{{ $mode_paiment->type }}</span> {{ $mode_paiment->description }}</p>
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div>
                    <input type="hidden" name="car_id" id="car_id" value="{{ $car_id }}">
                </div>

                <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</section>

@include('Components.Footer')