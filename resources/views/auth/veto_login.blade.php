@extends('layouts.veto')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
                <div class="card">
                    <div class="card-body">
                        <form id="sign_in_adm" method="POST" action="{{ route('veto.login.submit') }}">
                            {{ csrf_field() }}
                            <h1>Connexion vétérinaire</h1>
                            <div class="form-line">
                                <input type="email" class="form-control" name="email" placeholder="Adresse email"
                                @isset($input)value="{{ $input['email'] }}"@endisset value="{{ old('email') }}" 
                                required autofocus />
                            </div>                            
                            <br>
                            <div class="form-line">
                                <input type="password" class="form-control" name="password" 
                                placeholder="Mot de passe" required />
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info">Se connecter</button>
                            </div>
                        </form> <br/>
                        @isset($message)
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                        @endisset
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

@endsection

