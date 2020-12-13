@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Registruoti klientą') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin_naujas_klientas_post') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">Prisijungimo vardas</label>
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
                                <label for="vardas" class="col-md-4 col-form-label text-md-right">{{ __('Vardas') }}</label>
                                <div class="col-md-6">
                                    <input id="vardas" type="text" class="form-control @error('vardas') is-invalid @enderror" name="vardas" value="{{ old('vardas') }}" required autocomplete="vardas" autofocus>
                                    @error('vardas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pavarde" class="col-md-4 col-form-label text-md-right">{{ __('Pavardė') }}</label>
                                <div class="col-md-6">
                                    <input id="pavarde" type="text" class="form-control @error('pavarde') is-invalid @enderror" name="pavarde" value="{{ old('pavarde') }}" required autocomplete="pavarde" autofocus>
                                    @error('pavarde')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <input type="hidden" class="form-control" id="role" name="role" value="klientas">

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Elektroninis paštas') }}</label>
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
                                <label for="telefonas" class="col-md-4 col-form-label text-md-right">{{ __('Telefono numeris') }}</label>
                                <div class="col-md-6">
                                    <input id="telefonas" type="text" class="form-control @error('telefonas') is-invalid @enderror" name="telefonas" value="">
                                    @error('telefonas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="metai" class="col-md-4 col-form-label text-md-right">{{ __('Gymimo metai') }}</label>
                                <div class="col-md-6">
                                    <input id="metai" type="date" class="form-control @error('metai') is-invalid @enderror" name="metai" value="">
                                    @error('metai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Slaptažodis') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button onclick="return confirm('Ar tikrai norite užregistruoti klientą?');" type="submit" class="btn btn-primary">
                                        {{ __('Registruoti') }}
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
