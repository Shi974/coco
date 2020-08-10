@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h2 class="container-fluid d-flex justify-content-center text-center">
            Vous avez scanné un animal, merci !
        </h2>
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">Fiche animal</div> --}}
                <div class="card-body">
                    <h3 class="d-flex flex-row justify-content-around">
                        {{ $animal -> first_name }}
                        <img src="https://img.icons8.com/emoji/50/000000/dog--v2.png"/>
                    </h3>
                    Race : {{ $animal -> breed }} <br/>
                    <hr/>
                    Propriétaire : {{ $animal -> user -> first_name }} <br/>
                    <hr/>
                    <ul>
                        <li>Bobby est très câlin mais a peur des bruits stridents et des lumières vives.</li>
                        <li>[Info 1]</li>
                    </ul>
                    <hr/>
                    <div class="d-flex flex-column text-center">
                        <button class="btn btn-primary m-1" id="find_me_btn">
                            <i class="fas fa-map-marker-alt mr-1"></i> Signaler la géolocalisation au propriétaire
                        </button>
                        <div id="geoloc_error"></div>
                        <a href="tel:+262{{ $animal -> user -> phone }}">
                            <button class="btn btn-primary m-1">
                                <i class="fas fa-phone-alt mr-1"></i> Appeler propriétaire
                            </button>
                        </a>
                        {{-- <button class="btn btn-primary m-1">
                            <i class="fal fa-comment-alt-lines"></i> Envoyer SMS au propriétaire
                        </button> --}}
                        <a href="mailto:{{ $animal -> user -> email }}">
                            <button class="btn btn-primary m-1">
                                <i class="fas fa-envelope mr-1"></i> Envoyer email propriétaire
                            </button>
                        </a>
                    </div>
                    <!-- HIDDEN FORM BOUTON DE TRI : AUTOUR DE MOI -->
                    <form method="POST" action="/geolocaliser_animal" id="geoloc_form">
                        @csrf
                        <input type="text" id="latitude" name="latitude" hidden />
                        <input type="text" id="longitude" name="longitude" hidden />
                        <input type="text" id="id" name="id" value="{{ $animal -> id }}" hidden />
                        <input type="text" id="username" name="username" value="{{ $animal -> user -> username }}" hidden />
                        <input type="text" id="name" name="name" value="{{ $animal -> first_name }}" hidden />
                    </form>                    
                    <hr/>
                    <div class="alert alert-warning font-weight-bold">
                        <img class="btn-icon" src="https://img.icons8.com/fluent/48/000000/box-important.png"/>
                        Si l'animal est blessé
                    </div>
                    <ul>
                        <li>Rassurer l'animal</li>
                        <li>Localiser la blessure</li>
                        <li>Contacter le vétérinaire</li>
                        <li>Rester auprès de l'animal</li>
                    </ul>
                    <div class="d-flex justify-content-center">
                    <a class="btn btn-warning m-auto" href="tel:+262{{ $animal -> veterinary -> phone_practice }}">
                            <i class="fas fa-user-md mr-1"></i> Appeler vétérinaire
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
     $(document).ready(function () {
        // SCRIPT GEOLOCALISATION
        $("#find_me_btn").click(function () { // user clicks button
            if (navigator.geolocation) { // check if geolocation is available 
                // try to get user current location using getCurrentPosition() method
                navigator.geolocation.getCurrentPosition(showLocation, error);
            } else { // gestion des erreurs = ne semble pas fonctionner, d'où la fonction error
                // alert("La géolocalisation n'est pas supportée.");
                // $("#geoloc_error").html("Votre navigateur ne supporte pas la géolocalisation. Veuillez sélectionner une zone.")
            }
        });
        // TODO 
        function showLocation(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            $("#location").html("Found your location <br />Lat : " + position.coords.latitude + " </br>Lang :" + 
            position.coords.longitude);
            console.log("Found your location <br />Lat : " + position.coords.latitude + " </br>Lang :" + 
            position.coords.longitude);
            $("#latitude").val(position.coords.latitude);
            $("#longitude").val(position.coords.longitude);
            $("#geoloc_form").submit();
        }
        function error() { // gestion des erreurs
            // alert("La géolocalisation n'est pas supportée."); // message d'erreur suffit
            console.log("erreur");
            $("#geoloc_error").html("Votre navigateur ne supporte pas la géolocalisation.<br>Veuillez sélectionner une zone ou entrer une adresse.");
            $("#geoloc_error").addClass("alert alert-danger w-50 p-3 m-auto");
        }
     });
</script>

@endsection
