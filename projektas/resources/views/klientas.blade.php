@extends('layouts.app')

@section('content')
    <p><a href="{{route('redaguoti_profili')}}">Redaguoti profilį</a></p>
    <p><a href="{{route('pasalinti_profili')}}">Pašalinti profilį</a></p>
    <p><a href="{{route('atsiliepimai')}}">Parašyti atsiliepimą</a></p>


@endsection
