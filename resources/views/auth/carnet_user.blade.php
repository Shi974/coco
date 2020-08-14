@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ url('/home') }}" class="btn">
                <img alt="Retour page précédente" src="https://img.icons8.com/metro/50/000000/long-arrow-left.png"/> Retour profil
            </a>
            <h2>Carnet de santé</h2>
            <div class="card">
                <div class="card-header">{{ $carnet -> animals[0] -> first_name }}</div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h3><img src="https://img.icons8.com/emoji/50/000000/dog--v2.png"/></h3>
                        <div class="d-flex flex-column">
                            <span>Né le : {{ $carnet -> animals[0] -> birth_date -> format ('d/m/Y') }}</span>
                            <span>Race : {{ $carnet -> animals[0] -> breed }}</span>
                        </div>
                    </div>
                    <h4>
                        Prochain RDV : @if ($appointment != null) {{ utf8_encode(strftime('%d %B %Y - %Hh%M', strtotime($appointment))) }} @else pas de RDV prévu @endif
                    </h4>
                    <a class="d-flex justify-content-center btn" href="tel:+262{{$carnet -> animals[0] -> veterinary -> phone_practice }}">
                        <button class="btn btn-warning m-auto">
                            <i class="fas fa-user-md"></i> Appeler vétérinaire
                        </button>
                    </a>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-success text-center" href="/carnet/{{ $carnet -> id }}/nouveau_soin"><i class="fas fa-calendar-plus"></i> Ajouter</a>
                    </div>
                    <ul id="treatments">
                        @foreach ($carnet -> treatments -> sortByDesc('date') as $item)
                        <li class="m-1">
                            <a href="/carnet/{{ $carnet -> id }}/editer/{{ $item -> id }}" class="btn btn-primary p-1"><i class="fas fa-pencil-alt"></i></a> <a 
                                href="/carnet/supprimer/{{ $item -> id }}" class="btn btn-secondary p-1"
                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce soin ?')"><i 
                                class="fas fa-trash-alt"></i>
                            </a> 
                            @if ($item -> sante_soin == "santé")<img src="https://img.icons8.com/bubbles/50/000000/heart-with-pulse.png"/>
                            @else<img src="https://img.icons8.com/bubbles/50/000000/surgical-scissors.png"/>@endif 
                            <b>{{ $item -> type }}</b> @if ($item -> rappel === 'oui') <i class="fas fa-bell text-danger"></i> @endif 
                            <i class="fas fa-calendar-alt text-success"></i> {{ utf8_encode(strftime('%d %B %Y - %Hh%M', strtotime($item -> date))) }} @if ($item -> effectue_par != null) 
                            effectué par {{ $item -> effectue_par}} @endif
                        </li>
                        @endforeach
                    </ul>
                    @if (count($carnet -> treatments) > 5)
                    <a class="d-flex justify-content-center btn" href="tel:+262{{$carnet -> animals[0] -> veterinary -> phone_practice }}">
                        <button class="btn btn-warning m-auto">
                            <i class="fas fa-user-md"></i> Appeler vétérinaire
                        </button>
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection