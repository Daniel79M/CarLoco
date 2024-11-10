@extends('layout.base')

@if (Auth::user()->is_admin === 1)
@include('components.AdminNavBar')
@elseif(Auth::user()->is_admin === 'false')
@include('Components.WelcomeNav_bar')
@endif

<div class="gallery_section layout_padding">
    <div class="container my-5">
        <h1 class="text-center mb-4">Liste des Utilisateurs</h1>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead  class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>prenoms</th>
                        <th>Email</th>
                        <th>address</th>
                        <th>ville</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->nom }}</td>
                            <td>{{ $user->prenoms }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->ville }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('Components.Footer') 