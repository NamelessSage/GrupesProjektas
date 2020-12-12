@extends('layouts.app')

@section('content')
    Duomenys apie klienta

    <p>
        {{$klientas->username}}
    </p>
    <p>
        {{$klientas->vardas}}
    </p>
    <p>
        {{$klientas->pavarde}}
    </p>
    <p>
        {{$klientas->email}}
    </p>
    <p>
        {{$klientas->telefono_nr}}
    </p>
    <p>
        {{$klientas->gimimo_metai}}
    </p>

    <p><a href="{{route('admin_redaguoti_klienta', $klientas->id)}}">Redaguoti</a></p>
    <p><a href="{{route('admin_salinti_klienta', $klientas->id)}}">Pasalinti</a></p>



@endsection
