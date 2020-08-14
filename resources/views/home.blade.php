@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Panneau de contrôle du profil</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- MESSAGE SESSION FLASH --}}
                    @if (Session::has('message'))
                    <div class="col-10 offset-1 d-flex flex-column">
                        <p class="alert alert-success mb-2" style="text-align: center; font-weight:bold">
                            {!! Session::get('message') !!}
                        </p>
                    </div>
                    @endif

                    <a class="btn d-flex justify-content-between p-0 dropdown-icon" data-toggle="collapse" href="#mes_infos" 
                        role="button" aria-expanded="false" aria-controls="mes_infos">
                        <h2><img src="https://img.icons8.com/ios/50/000000/name.png"/> Mes infos</h2>
                        <i class="fas fa-caret-down h2 align-self-center"></i>
                    </a>

                    <div class="collapse" id="mes_infos">
                        Vous êtes connecté en tant que <b>{{ Auth::user()-> username }}</b>.<br/>
                        Prénom : {{ Auth::user()-> first_name }} <br/>
                        Nom : {{ Auth::user()-> last_name }} <br/>
                        Adresse mail : {{ Auth::user()-> email }} <br/>
                        Adresse : {{ Auth::user()-> address }} @if (Auth::user()-> address_plus == !null) 
                        - {{ Auth::user()-> address_plus }} - @endif {{ Auth::user()-> postal_code }} 
                        {{ Auth::user()-> city }} ({{ Auth::user()-> country }})<br/>
                        Téléphone : {{ Auth::user()-> phone }} <br/>
                        @if (Auth::user()-> phone_plus == !null)
                        Téléphone : {{ Auth::user()-> phone_plus }} <br/>
                        @endif
                        <a class="btn btn-primary m-auto" href="/user/modifier/{{ Auth::user()-> id }}">Modifier</a>
                    </div>

                    <hr/>

                    <h2><img src="https://img.icons8.com/ios/48/000000/cat-footprint.png"/> Mes animaux</h2>

                    @foreach (Auth::user() -> animals as $item)
                    @if ($item -> type == 'chien') <img src="https://img.icons8.com/emoji/50/000000/dog--v2.png"/>      
                    @else <img src="https://img.icons8.com/emoji/48/000000/cat-emoji.png"/> @endif
                    Prénom : {{ $item -> first_name }} <br/>
                    Date de naissance : {{ $item -> birth_date -> format('d/m/Y') }} <br/>
                    Race : {{ $item -> breed }} <br/>
                    Vétérinaire : {{ $item -> veterinary -> first_name }} {{ $item -> veterinary -> last_name }},
                    <a href="mailto:{{ $item -> veterinary -> email }}">{{ $item -> veterinary -> email }}</a> <br/>
                    Cabinet vétérinaire : {{ $item -> veterinary -> address_practice }} @if ($item -> veterinary -> address_practice_plus == !null) 
                    - {{ $item -> veterinary -> address_practice_plus }} - @endif {{ $item -> veterinary -> postal_code_practice }}
                    {{ $item -> veterinary -> city_practice }} ({{ $item -> veterinary -> country_practice }}) <br/>
                    Téléphone : <a href="tel:+262{{ $item -> veterinary -> phone_practice }}">{{ $item -> veterinary -> phone_practice }}</a> <br/>
                    @if ($item -> veterinary -> phone_practice_plus == !null)
                    Téléphone : <a href="tel:+262{{ $item -> veterinary -> phone_practice_plus }}">{{ $item -> veterinary -> phone_practice_plus }}</a> <br/>
                    @endif
                    <a href="/animal/{{ $item -> id }}/editer_veterinaire"><button class="btn btn-primary m-auto">
                        Modifier vétérinaire
                    </button></a>
                    <a href="/carnet/{{ $item -> id }}">
                        <button class="btn btn-success m-auto">
                            <img class="btn-icon" src="https://img.icons8.com/color/48/000000/health-book.png"/> 
                            Voir carnet de santé
                        </button>
                    </a>
                    <br/>
                    @endforeach
                </div>
            </div>

            <div class="alert alert-warning font-weight-bold rounded mt-2">
                <img class="btn-icon" src="https://img.icons8.com/fluent/48/000000/box-important.png"/>
                Un soucis avec l'application ou les données ?
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-warning m-1 ">Contacter l'administrateur</button>
            </div>

        </div>
    </div>
</div>
@endsection
