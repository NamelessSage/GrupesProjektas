@extends('layouts.app')

@section('content')
    <div class = "container" style="float: left">
        <b>Vardas:</b> {{$klientas->vardas}} <br/>
        <b>Pavardė:</b> {{$klientas->pavarde}} <br/>
        <b>Slapyvardis:</b> {{$klientas->username}} <br/>
        <b>El. paštas:</b> {{$klientas->email}} <br/>
        <b>Telefono numeris:</b> {{$klientas->telefono_nr}} <br/>
        <b>Gimimo metai:</b> {{$klientas->gimimo_metai}} <br/>
        <div><a href="{{route('admin_redaguoti_klienta', $klientas->id)}}"><button type="button" class="btn btn-primary sign-bttn1"  style="margin: 10px">Redaguoti</button></a></div>
        <div><a class="btn btn-danger" onclick="return confirm('Ar tikrai nori panaikinti klientą?'); " href="{{route('admin_redaguoti_klienta', $klientas->id)}}">Pašalinti klientą</a></div>
    </div>
@endsection
