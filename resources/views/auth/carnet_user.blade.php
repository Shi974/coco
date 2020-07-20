@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ url()->previous() }}">
                <img alt="Retour page précédente" src="https://img.icons8.com/plasticine/100/000000/long-arrow-left.png"/>
            </a>
            <h2>Carnet de santé</h2>
            <div class="card">
                <div class="card-header">{{ $carnet -> animals[0] -> first_name }}</div>
                <div class="card-body">
                    <h3><img src="https://img.icons8.com/emoji/50/000000/dog--v2.png"/></h3><br/>
                <h4>
                    Prochain RDV : @if ($carnet -> next_appointment == !null)
                    {{ strftime("%A %d %B %Y à %Hh%M", strtotime($carnet -> next_appointment)) }}
                    @else pas de RDV prévu @endif
                </h4>
                <p>Né le : {{ $carnet -> animals[0] -> birth_date -> format ('d/m/Y') }}</p>
                <p>Race : {{ $carnet -> animals[0] -> breed }}</p>
                <ul>
                    @if ($carnet -> vaccine_info == !null)
                    <li>{!! $carnet -> vaccine_info !!}</li>
                    @endif
                    @if ($carnet -> disease_info == !null)
                    <li>{{ $carnet -> disease_info }}</li>
                    @endif
                    @if ($carnet -> diet_info == !null)
                    <li>{{ $carnet -> diet_info }}</li>
                    @endif
                    @if ($carnet -> misc_info == !null)
                    <li>{{ $carnet -> misc_info }}</li>
                    @endif
                    @if ($carnet -> misc_plus_info == !null)
                    <li>{{ $carnet -> misc_plus_info }}</li>
                    @endif
                </ul>
                <a href="tel:+262{{$carnet -> animals[0] -> veterinary -> phone_practice }}"><button class="btn btn-warning m-auto">Appeler vétérinaire</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection