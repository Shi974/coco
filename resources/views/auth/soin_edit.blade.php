@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ url() -> previous() }}" class="btn">
                <img alt="Retour page précédente" src="https://img.icons8.com/metro/50/000000/long-arrow-left.png"/> Retour carnet
            </a>
            <h2>Editer un soin</h2>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form role="form" method="POST" action="/carnet/{{ $carnet_id }}/update/{{ $id }}">
                            @csrf
                            <div class="h2">@if ($soin -> sante_soin == "santé")<img src="https://img.icons8.com/bubbles/50/000000/heart-with-pulse.png"/>
                                @else <img src="https://img.icons8.com/bubbles/50/000000/surgical-scissors.png"/>@endif {{ ucfirst($soin -> sante_soin) }}
                            </div>
                            <div class="form-group">
                                <label for="type">
                                    Type
                                </label>
                                <select name="type" class='form-control @error('type') is-invalid @enderror' name='type' required>
                                    @if ($soin -> sante_soin == "santé")
                                    <option @if ($soin -> type == 'Consultation vétérinaire') selected @endif>Consultation vétérinaire</option>
                                    <option @if ($soin -> type == 'Vermifuge') selected @endif>Vermifuge</option>
                                    <option @if ($soin -> type == 'Traitement anti puces/tiques') selected @endif>Traitement anti puces/tiques</option>
                                    <option @if ($soin -> type == 'Vaccin') selected @endif>Vaccin</option>
                                    <option @if ($soin -> type == 'Traitement') selected @endif>Traitement</option>
                                    <option @if ($soin -> type == 'Chirurgie') selected @endif>Chirurgie</option>
                                    <option @if ($soin -> type == 'Consultation spécialiste') selected @endif>Consultation spécialiste</option>
                                    <option @if ($soin -> type == 'Test génétique/santé') selected @endif>Test génétique/santé</option>
                                    <option @if ($soin -> type == 'Examen en labo') selected @endif>Examen en labo</option>
                                    <option @if ($soin -> type == 'Reproduction') selected @endif>Reproduction</option>
                                    <option @if ($soin -> type == 'Autre') selected @endif>Autre</option>
                                    @else
                                    <option @if ($soin -> type == "Coupe d'ongles") selected @endif>Coupe d'ongles</option>
                                    <option @if ($soin -> type == 'Toilettage') selected @endif>Toilettage</option>
                                    <option @if ($soin -> type == 'Nettoyage des oreilles') selected @endif>Nettoyage des oreilles</option>
                                    <option @if ($soin -> type == 'Nettoyage des dents') selected @endif>Nettoyage des dents</option>
                                    <option @if ($soin -> type == 'Bain') selected @endif>Bain</option>
                                    <option @if ($soin -> type == 'Poids') selected @endif>Poids</option>
                                    <option @if ($soin -> type == 'Taille') selected @endif>Taille</option>
                                    <option @if ($soin -> type == 'Aliment') selected @endif>Aliment</option>
                                    @endif
                                </select>
                                @error ('type')
                                    <div class="alert alert-danger text-center" role="alert">
                                    <strong>{{ $errors -> first('type') }}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="date">
                                    Date
                                </label>
                                <input type="datetime-local" class="form-control @error('date') is-invalid @enderror" 
                                id="date" name="date" value="{{ $date }}" required />
                                @error ('date')
                                    <div class="alert alert-danger text-center" role="alert">
                                    <strong>{{ $errors -> first('date') }}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="produit_nom">
                                    Nom du produit
                                </label>
                                <input type="text" class="form-control @error('produit_nom') is-invalid @enderror" 
                                id="produit_nom" name="produit_nom" value="{{ $soin -> nom_produit }}" />
                                @error ('produit_nom')
                                    <div class="alert alert-danger text-center" role="alert">
                                    <strong>{{ $errors -> first('produit_nom') }}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="effectue_par">Effectué par</label>
                                <select class="form-control @error('effectue_par') is-invalid @enderror" id="effectue_par" name="effectue_par">
                                    <option @if ($soin -> effectue_par == null) selected @endif value="" disabled>Choisir</option>
                                    <option @if ($soin -> effectue_par == 'propriétaire') selected @endif value="propriétaire">propriétaire</option>
                                    <option @if ($soin -> effectue_par == 'vétérinaire') selected @endif value="vétérinaire">vétérinaire</option>
                                    <option @if ($soin -> effectue_par == 'toiletteur') selected @endif value="toiletteur">toiletteur</option>
                                </select>
                                @error ('effectue_par')
                                    <div class="alert alert-danger text-center" role="alert">
                                    <strong>{{ $errors -> first('effectue_par') }}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="remarques">
                                    Remarques
                                </label>
                                <input type="text" class="form-control @error('remarques') is-invalid @enderror" id="remarques" 
                                name="remarques" value="{{ $soin -> remarques }}" />
                                @error ('remarques')
                                    <div class="alert alert-danger text-center" role="alert">
                                    <strong>{{ $errors -> first('remarques') }}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="rappel" value="oui" 
                                    @if ($soin -> rappel == 'oui') checked @endif/> Envoyer un rappel ?
                                </label>
                            </div> 
                            <button type="submit" class="btn btn-primary">
                                Envoyer
                            </button>
                        </form>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection