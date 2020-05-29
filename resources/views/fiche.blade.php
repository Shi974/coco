@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h2>
            Vous avez scanné un animal, merci !
        </h2>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Fiche animal</div>
                <div class="card-body">
                    <h3><img src="https://img.icons8.com/emoji/50/000000/dog--v2.png"/> {{ $animal -> first_name }}</h3><br/>
                    Race : {{ $animal -> breed }} <br/>
                    //info animal
                    {{ $animal }}
                    <hr/>
                    Propriétaire : {{ $animal -> user -> first_name }} <br/>
                    // infos proprio
                    {{ $animal -> user }} <br/>
                    <hr/>
                    [autres infos] <br/>
                    [autres infos] <br/>
                    [autres infos] <br/>
                    <hr/>
                    <button class="btn btn-primary m-auto">Signaler la géolocalisation au propriétaire</button>
                    <button class="btn btn-primary m-auto">Appeler propriétaire</button>
                    <button class="btn btn-primary m-auto">Envoyer SMS au propriétaire</button>
                    {{-- <button class="btn btn-primary m-auto">Envoyer email propriétaire</button> --}}
                    <hr/>
                    <div class="alert alert-warning">Si l'animal est blessé</div>
                    [indiquer des étapes à effectuer, éventuellement mettre un formulaire] <br/>
                    // infos véto
                    {{ $animal -> veterinary }} <br/>
                    <button class="btn btn-warning m-auto">Appeler vétérinaire</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
