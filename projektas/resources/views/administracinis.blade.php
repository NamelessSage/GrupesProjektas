@extends('layouts.app')

@section('content')
    <p><a href="{{route('admin_uzsakymai')}}">Uzsakymu sarasas</a></p>
    <p><a href="{{route('admin_klientai')}}">Klientu sarasas</a></p>
    <p><a href="{{route('admin_naujas_klientas')}}">Prideti klienta</a></p>
    <p><a href="{{route('admin_pagalbos_sarasas')}}">Pagalbos sarasas</a></p>



@endsection
