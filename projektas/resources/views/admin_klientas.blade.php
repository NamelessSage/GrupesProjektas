@extends('layouts.app')

@section('content')
    <div class = "container" style="float: left">
        <b>Vardas:</b> {{Auth::user()->vardas}} <br/>
        <b>Pavardė:</b> {{Auth::user()->pavarde}} <br/>
        <b>Slapyvardis:</b> {{Auth::user()->username}} <br/>
        <b>El. paštas:</b> {{Auth::user()->email}} <br/>
        <b>Telefono numeris:</b> {{Auth::user()->telefono_nr}} <br/>
        <b>Gimimo metai:</b> {{Auth::user()->gimimo_metai}} <br/>
        <div><a href="{{route('admin_redaguoti_klienta', $klientas->id)}}"><button type="button" class="btn btn-primary sign-bttn1"  style="margin: 10px">Redaguoti</button></a></div>
        <div><a class="btn btn-danger" onclick="return confirm('Ar tikrai nori panaikinti klientą?'); " href="{{route('admin_redaguoti_klienta', $klientas->id)}}">Pašalinti klientą</a></div>
    </div>
@endsection
