@extends('layouts.veto')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Panneau de contrôle du profil vétérinaire</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2><img src="https://img.icons8.com/color/50/000000/doctor-male.png"/> Mes infos</h2>

                    Vous êtes connecté en tant que <b>{{ Auth::user() -> username }}</b>.<br/>
                    Prénom : {{ Auth::user() -> first_name }} <br/>
                    Nom : {{ Auth::user() -> last_name }} <br/>
                    Adresse mail : {{ Auth::user() -> email }} <br/>
                    Adresse cabinet : {{ Auth::user() -> address_practice }} @if (Auth::user() -> address_practice_plus == !null) 
                    - {{ Auth::user() -> address_practice_plus }} - @endif {{ Auth::user() -> postal_code_practice }} 
                    {{ Auth::user() -> city_practice }} ({{ Auth::user() -> country_practice }})<br/>
                    Téléphone : {{ Auth::user() -> phone_practice }} <br/>
                    @if (Auth::user() -> phone_practice_plus == !null)
                    Téléphone : {{ Auth::user() -> phone_practice_plus }} <br/>
                    @endif
                    <button class="btn btn-primary m-auto">Modifier</button>

                    <hr/>

                    <h2><img src="https://img.icons8.com/ios/48/000000/cat-footprint.png"/> Les animaux dont je m'occupe</h2>

                    @foreach (Auth::user() -> animals as $item)
                    @if ($item -> type == 'chien') <img src="https://img.icons8.com/emoji/50/000000/dog--v2.png"/>      
                    @else <img src="https://img.icons8.com/emoji/48/000000/cat-emoji.png"/> @endif
                    Prénom : {{ $item -> first_name }} <br/>
                    Nom : {{ $item -> last_name }} <br/>
                    Date de naissance : {{ $item -> birth_date -> format('d/m/Y') }} <br/>
                    Race : {{ $item -> breed }} <br/>
                    Propriétaire : {{ $item -> user -> first_name }} {{ $item -> user -> last_name }},
                    <a href="mailto:{{ $item -> user -> email }}">{{ $item -> user -> email }}</a> <br/>
                    Adresse : {{ $item -> user -> address }} @if ($item -> user -> address_plus == !null) 
                    - {{ $item -> user -> address_plus }} - @endif {{ $item -> user -> postal_code }}
                    {{ $item -> user -> city }} ({{ $item -> user -> country }}) <br/>
                    Téléphone : <a href="tel:+262{{ $item -> user -> phone }}">{{ $item -> user -> phone }}</a> <br/>
                    @if ($item -> user -> phone_plus == !null)
                    Téléphone : <a href="tel:+262{{ $item -> user -> phone_plus }}">{{ $item -> user -> phone_plus }}</a> <br/>
                    @endif
                    <a href="/carnet/{{ $item -> id }}"><button class="btn btn-success m-auto"><img class="btn-icon" src="https://img.icons8.com/color/48/000000/health-book.png"/> Voir carnet de santé</button></a> <br/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
