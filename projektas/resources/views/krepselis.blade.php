@extends('layouts.app')

@section('content')
    <p><a href="#">Krepselis</a></p>
    <p><a href="#">Prekiu kiekio padidinimas</a></p>
    <p><a href="#">Prekes pridejimas</a></p>
    <p><a href="{{route('apziura')}}">Prekes apziura</a></p>
    <p><a href="#">Prekiu kiekio pakeitimas</a></p>
    <form action="POST">
        <label for="kodas">Nuolaidos kodas:</label>
        <input type="text" id="kodas" name="kodas"><br><br>
        <input type="submit" value="Patvirtinti">
    </form>
    <p><a href="{{route('krepselioPatvirtinimas')}}">Krepselio patvirtinimas</a></p>
@endsection
