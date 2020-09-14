@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="ml-3">
                    <span class="required">*</span> = Champ obligatoire
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h4 class="text-center">Votre compte CoCo</h4>
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">Pseudo</label> <span class="required">*</span>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> <span class="required">*</span>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> <span class="required">*</span>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> <span class="required">*</span>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <hr/>
                        <h4 class="text-center">Vos informations personnelles</h4>
                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">Prénom</label> <span class="required">*</span>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">Nom</label> <span class="required">*</span>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Adresse</label> <span class="required">*</span>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address_plus" class="col-md-4 col-form-label text-md-right">Complément d'adresse</label>

                            <div class="col-md-6">
                                <input id="address_plus" type="text" class="form-control @error('address_plus') is-invalid @enderror" name="address_plus" value="{{ old('address_plus') }}" required autocomplete="address_plus" autofocus>

                                @error('address_plus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="postal_code" class="col-md-4 col-form-label text-md-right">Code postal</label> <span class="required">*</span>

                            <div class="col-md-6">
                                <input id="postal_code" type="text" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" value="{{ old('postal_code') }}" required autocomplete="postal_code" autofocus>

                                @error('postal_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">Ville</label> <span class="required">*</span>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Téléphone</label> <span class="required">*</span>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="phone_plus" class="col-md-4 col-form-label text-md-right">Autre n° téléphone (optionnel)</label>

                            <div class="col-md-6">
                                <input id="phone_plus" type="text" class="form-control @error('phone_plus') is-invalid @enderror" name="phone_plus" value="{{ old('phone_plus') }}" required autocomplete="phone_plus" autofocus>

                                @error('phone_plus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        <hr/>
                        <h4 class="text-center">Les informations de votre animal</h4>
                        
                        <div class="form-group row">
                            <label for="code_collier" class="col-md-4 col-form-label text-md-right">Code COCO</label> <span class="required">*</span>

                            <div class="col-md-6">
                                <input id="code_collier" type="text" class="form-control @error('code_collier') is-invalid @enderror" name="code_collier" value="{{ old('code_collier') }}" required autocomplete="code_collier" autofocus>

                                @error('code_collier')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="animal_first_name" class="col-md-4 col-form-label text-md-right">Prénom</label> <span class="required">*</span>

                            <div class="col-md-6">
                                <input id="animal_first_name" type="text" class="form-control @error('animal_first_name') is-invalid @enderror" name="animal_first_name" value="{{ old('animal_first_name') }}" required autocomplete="animal_first_name" autofocus>

                                @error('animal_first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="animal_last_name" class="col-md-4 col-form-label text-md-right">Nom</label>

                            <div class="col-md-6">
                                <input id="animal_last_name" type="text" class="form-control @error('animal_last_name') is-invalid @enderror" name="animal_last_name" value="{{ old('animal_last_name') }}" autocomplete="animal_last_name" autofocus>

                                @error('animal_last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="animal_birth_date" class="col-md-4 col-form-label text-md-right">Date de naissance</label>

                            <div class="col-md-6">
                                <input id="animal_birth_date" type="date" class="form-control @error('animal_birth_date') is-invalid @enderror" name="animal_birth_date" value="{{ old('animal_birth_date') }}" autocomplete="animal_birth_date" autofocus>

                                @error('animal_birth_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="animal_type" class="col-md-4 col-form-label text-md-right">Type</label> <span class="required">*</span>

                            <div class="col-md-6">
                                <select id="animal_type" class="form-control @error('animal_type') is-invalid @enderror" name="animal_type" value="{{ old('animal_type') }}" required autocomplete="animal_type" autofocus>
                                    <option value="" selected>Sélectionner</option>
                                    <option value="chien">Chien</option>
                                    <option value="chat">Chat</option>
                                </select>

                                @error('animal_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="animal_breed" class="col-md-4 col-form-label text-md-right">Race</label> <span class="required">*</span>

                            <div class="col-md-6">
                                <div id="selectBreed"></div>

                                @error('animal_breed')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
