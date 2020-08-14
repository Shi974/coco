@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ url() -> previous() }}" class="btn">
                <img alt="Retour page précédente" src="https://img.icons8.com/metro/50/000000/long-arrow-left.png"/> Retour carnet
            </a>
            <h2>Mise à jour vétérinaire <i class="fas fa-user-md"></i> </h2>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form role="form" method="POST" action="/animal/{{ $animal -> id }}/update_veterinaire">
                            @csrf
                            <div class="form-group">
                                <label for="veto_id">
                                    Choix du vétérinaire
                                </label>
                                <select id="veto_id" name="veto_id" class='form-control @error('veto_id') is-invalid @enderror' name='veto_id' required>
                                    @foreach ($veto as $item)
                                    <option value="{{ $item -> id }}" @if($animal -> veterinary_id === $item -> id) selected @endif>{{ $item -> first_name }} {{ $item -> last_name }} - {{ $item -> city_practice }}</option>
                                    @endforeach
                                </select>
                                @error ('veto_id')
                                    <div class="alert alert-danger text-center" role="alert">
                                    <strong>{{ $errors -> first('veto_id') }}</strong>
                                    </div>
                                @enderror
                            </div>
                            <h3>Vétérinaire sélectionné</h3>
                            <div id="infos">
                                @foreach ($veto as $item)
                                <div class="selectDescVeto {{ $item -> id }}">
                                    <h4>
                                        <i class="fas fa-user-md"></i> {{ $item -> first_name }} {{ $item -> last_name }}
                                    </h4>
                                    <span>
                                        <i class="fas fa-map-marker-alt"></i> {{ $item -> address_practice }} {{ $item -> address_plus_practice }} {{ $item -> postal_code_practice }} {{ $item -> city_practice }} {{ $item -> country_practice }}
                                    </span><br/>
                                    <a href="https://maps.google.com/?q='{{ $item -> address_practice }} {{ $item -> address_practice_plus }},{{ $item -> city_practice }}, {{ $item -> country_practice }}" target="_blank"><i class="fas fa-map-marked-alt"></i> Voir localisation</a><br/>
                                    <span>
                                        <i class="fas fa-phone-alt"></i> {{ $item -> phone_practice }} @if ($item -> phone_practice_plus != null) || {{ $item -> phone_practice_plus }}@endif
                                    </span>
                                </div>
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">
                                Envoyer
                            </button>
                        </form>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <button class="btn btn-warning">Votre cabinet n'est pas dans la liste ?</button>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection