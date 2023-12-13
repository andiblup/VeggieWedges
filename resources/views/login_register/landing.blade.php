@extends('layout')
@section('main')

    {{-- Welclome to GROCERY STORE page, actions: to login button and to register button, centered card containing buth buttons, use bootstrap, responsive --}}
    <div class="">
        <div class="card d-flex justify-content-center">
            <div class="card-body d-flex flex-column align-items-center ">
                <h5 class="card-title">Willkommen bei VeggieWedges</h5>
                <p class="card-text">Bitte loggen sie sich ein oder registrieren sie sich.</p>
                <div class="">
                    <a href="/login" class="btn btn-primary">Login</a>
                <a href="/register" class="btn btn-primary">Registrieren</a>
                </div>
            </div>
        </div>

    @auth
        Sie sind eingeloggt!<br>
        Drücken sie <a>hier</a> um zur Hauptseite zu zu kehren.
    @endauth

    {{-- <style>
        #body * :not(.btn) {
            color: inherit!important;
            background-color: inherit!important;
        }
    </style> --}}
@endsection