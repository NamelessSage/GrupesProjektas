@extends('layouts.app')

@section('content')
    <div class = "container">
        <body>
        <b>Vardas:</b> {{Auth::user()->vardas}} <br/>
        <b>Pavardė:</b> {{Auth::user()->pavarde}} <br/>
        <b>Prisijungimo vardas:</b> {{Auth::user()->username}} <br/>
        <b>E.paštas:</b> {{Auth::user()->email}} <br/>
        <b>Telefono numeris:</b> {{Auth::user()->telefono_nr}} <br/>
        <b>Gimimo data:</b> {{Auth::user()->gimimo_metai}} <br/>
        </body>

        <div><a class="btn btn-primary" href="{{route('redaguoti_profili')}}">Redaguoti profilį</a></div>
        <div><a class="btn btn-primary" href="{{route('atsiliepimai')}}">Parašyti atsiliepimą</a></div>
        <div><a class="btn btn-danger" onclick="return confirm('Ar tikrai nori panaikinti savo profilį?'); " href="{{route('delete_user')}}">Pašalinti profilį</a></div>

    </div>
@endsection
