@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ url() -> previous() }}" class="btn">
                <img alt="Retour page précédente" src="https://img.icons8.com/metro/50/000000/long-arrow-left.png"/> Retour carnet
            </a>
            <h2>Ajouter un nouveau soin</h2>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form role="form" method="POST" action="/carnet/{{ $id }}/ajouter_soin">
                            @csrf
                            <div id="type_soin">
                                <label class="radio-inline m-1">
                                    <input type="radio" class="status-radio" name="sante_soin" value="santé" required > Santé
                                </label>
                                <label class="radio-inline m-1">
                                    <input type="radio" class="status-radio" name="sante_soin" value="soin" required > Soin
                                </label>
                            </div>
                            @error ('sante_soin')
                                <div class="alert alert-danger text-center" role="alert">
                                <strong>{{ $errors -> first('sante_soin') }}</strong>
                                </div>
                            @enderror
                            <div class="form-group">
                                <label for="type">
                                    Type
                                </label>
                                <div id="selectList"></div>
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
                                id="date" name="date" value="{{ old('date') }}" required />
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
                                id="produit_nom" name="produit_nom" value="{{ old('produit_nom') }}" />
                                @error ('produit_nom')
                                    <div class="alert alert-danger text-center" role="alert">
                                    <strong>{{ $errors -> first('produit_nom') }}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="effectue_par">Effectué par</label>
                                <select class="form-control @error('effectue_par') is-invalid @enderror" id="effectue_par" name="effectue_par">
                                    <option value="" selected disabled>Choisir</option>
                                    <option value="propriétaire">propriétaire</option>
                                    <option value="vétérinaire">vétérinaire</option>
                                    <option value="toiletteur">toiletteur</option>
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
                                name="remarques" value="{{ old('remarques') }}" />
                                @error ('remarques')
                                    <div class="alert alert-danger text-center" role="alert">
                                    <strong>{{ $errors -> first('remarques') }}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="rappel" value="oui" /> Envoyer un rappel ?
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