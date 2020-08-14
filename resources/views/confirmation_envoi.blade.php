@extends('layouts.app')

@section('content')
<div id="unauthorized" class="d-flex flex-column align-items-center">

    <div class="jumbotron bg-success text-white rounded-0 text-center w-100">
        <div class="container">
            <h1 class="display-4">Merci</h1>
        </div>
    </div>

    <div class="container mt-5 font-weight-bold text-center">
        <p class="text-break">La géolocalisation de l'animal a bien été envoyée à son propriétaire.</p>
    </div>

    <div class="justify-content-center">
        <a href="/"><button type="button" class="btn btn-primary">Retourner à l'accueil</button></a>
    </div>

    @auth
    <div class="justify-content-center mt-2">
        <a href="/home"><button type="button" class="btn btn-success">Retourner au profil</button></a>
    </div>
    @endauth

</div>
@endsection
