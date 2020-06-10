@extends('layouts.app')

@section('content')
<div id="unauthorized" class="d-flex flex-column align-items-center">

    <div class="jumbotron bg-danger text-white rounded-0 text-center w-100">
        <div class="container">
            <h1 class="display-3">Accès refusé</h1>
        </div>
    </div>

    <div class="container mt-5 font-weight-bold">
        <p class="text-break">Erreur 403.<br /> Droits insuffisants pour accéder à la page demandée.</p>
    </div>

    <div class="justify-content-center">
        <a href="/"><button type="button" class="btn btn-primary">Retourner à l'accueil</button></a>
    </div>

</div>
@endsection
