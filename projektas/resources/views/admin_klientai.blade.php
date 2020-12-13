@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-15">
                <div class="card">
                    <div class="card-header">{{ __('Klientų sąrašas') }}</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Klientas</th>
                                <th>Peržiūrėti</th>
                            </tr>
                            @foreach($klientai as $klientas)
                                <tr>
                                    <td>{{ $klientas->vardas  }} {{ $klientas->pavarde  }}</td>
                                    <td>
                                        <a href="{{route('admin_klientas', $klientas->id)}}"><button class="btn btn-primary" style="margin: 5px">Peržiūrėti</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
