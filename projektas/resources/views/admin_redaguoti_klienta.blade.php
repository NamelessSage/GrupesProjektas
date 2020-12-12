@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Redaguoti klienta') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin_redaguoti_klienta_post', $id) }}">
                            @csrf
                            <div class="form-group row">
                                <label for="vardas" class="col-md-4 col-form-label text-md-right">{{ __('Vardas') }}</label>
                                <div class="col-md-6">
                                    <input id="vardas" type="text" class="form-control @error('vardas') is-invalid @enderror" name="vardas" value="{{ $klientas->vardas }}" required autocomplete="vardas" autofocus>
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
                                    <input id="pavarde" type="text" class="form-control @error('pavarde') is-invalid @enderror" name="pavarde" value="{{ $klientas->pavarde }}" required autocomplete="pavarde" autofocus>
                                    @error('pavarde')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Issaugoti pakeitimus') }}
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
