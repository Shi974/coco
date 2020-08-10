@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-12 d-flex justify-content-center ">
        <form class="formulaire" action="/user/update/{{ $user -> id }}" method="post">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="email">Adresse email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $user -> email }}">
            </div>
            @if($errors -> has ('email'))
            <span class="text-light bg-danger p-2 rounded" role="alert">
                <strong> {{ $errors -> first('email')}}</strong>
            </span>
            @endif

            <div class="form-group">
                <label for="phone">Téléphone</label>
                <input type="number" class="form-control" id="phone" name="phone" value="{{ $user -> phone }}">
            </div>
            @if($errors -> has ('phone'))
            <span class="text-light bg-danger p-2 rounded" role="alert">
                <strong> {{ $errors -> first('phone')}}</strong>
            </span>
            @endif

            <div class="form-group">
                <label for="phone_plus">Autre n° téléphone (optionnel)</label>
                <input type="number" class="form-control" id="phone_plus" name="phone_plus" value="{{ $user -> phone_plus }}">
            </div>
            @if($errors -> has ('phone_plus'))
            <span class="text-light bg-danger p-1 rounded" role="alert">
                <strong>{{ $errors -> first ('phone_plus')}}</strong>
            </span>
            @endif

            <div class="form-group">
                <label for="address">Adresse</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $user -> address }}">
            </div>
            @if($errors -> has ('address'))
            <span class="text-light bg-danger p-2 rounded" role="alert">
                <strong> {{ $errors -> first('address')}}</strong>
            </span>
            @endif

            <div class="form-group">
                <label for="address_plus">Complément d'adresse</label>
                <input type="text" class="form-control" id="address_plus" name="address_plus" value="{{ $user -> address_plus }}">
            </div>
            @if($errors -> has ('address_plus'))
            <span class="text-light bg-danger p-2 rounded" role="alert">
                <strong> {{ $errors -> first('address_plus')}}</strong>
            </span>
            @endif

            <div class="form-group">
                <label for="postal_code">Code postal</label>
                <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ $user -> postal_code }}">
            </div>
            @if($errors -> has ('postal_code'))
            <span class="text-light bg-danger p-2 rounded" role="alert">
                <strong> {{ $errors -> first('postal_code')}}</strong>
            </span>
            @endif

            <div class="form-group">
                <label for="city">Ville</label>
                <input type="text" class="form-control" id="city" name="city" value="{{ $user -> city }}">
            </div>
            @if($errors -> has ('city'))
            <span class="text-light bg-danger p-2 rounded" role="alert">
                <strong> {{ $errors -> first('city')}}</strong>
            </span>
            @endif

            <button type="submit" class="btn btn-outline-success">Modifier</button>

        </form>
    </div>
</div>

@endsection
