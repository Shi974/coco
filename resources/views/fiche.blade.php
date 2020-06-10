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
                    {{-- //info animal
                    {{ $animal }} --}}
                    <hr/>
                    Propriétaire : {{ $animal -> user -> first_name }} <br/>
                    {{-- // infos proprio
                    {{ $animal -> user }} <br/> --}}
                    <hr/>
                    <ul>
                        <li>Bobby est très câlin mais a peur des bruits stridents et des lumières vives.</li>
                        <li>[Info 1]</li>
                        <li>[Info 2]</li>
                        <li>[Autres infos]</li>
                    </ul>
                    <hr/>
                    <button class="btn btn-primary m-auto">Signaler la géolocalisation au propriétaire</button>
                    <a href="tel:+262{{ $animal -> user -> phone }}"><button class="btn btn-primary m-auto">Appeler propriétaire</button></a>
                    <button class="btn btn-primary m-auto">Envoyer SMS au propriétaire</button>
                    {{-- <button class="btn btn-primary m-auto">Envoyer email propriétaire</button> --}}
                    <hr/>
                    <div class="alert alert-warning font-weight-bold">
                        <img class="btn-icon" src="https://img.icons8.com/fluent/48/000000/box-important.png"/>
                        Si l'animal est blessé
                    </div>
                    <ul>
                        <li>Etape 1</li>
                        <li>Etape 2</li>
                        <li>Etape 3</li>
                        <li>Etape 4</li>
                    </ul>
                    {{-- // infos véto
                    {{ $animal -> veterinary }} <br/> --}}
                    <button class="btn btn-warning m-auto">Appeler vétérinaire</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
