@extends('layouts.app')

@section('content')
    <div class = "container">
        <head>
        </head>
        <body>
        <b>Name:</b> {{Auth::user()->name}} <br/>
        <b>Username:</b> {{Auth::user()->username}} <br/>
        <b>Email:</b> {{Auth::user()->email}} <br/>
        </body>


        <div><a class="btn btn-primary" href="{{route('redaguoti_profili')}}">Redaguoti profilį</a></div>
        <div><a class="btn btn-danger" onclick="return confirm('Ar tikrai nori panaikinti savo profilį?'); " href="{{route('delete_user')}}">Pašalinti profilį</a></div>
{{--    <p><a href="{{route('atsiliepimai')}}">Parašyti atsiliepimą</a></p>--}}

    </div>
@endsection
