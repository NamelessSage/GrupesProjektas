@extends('layouts.app')

@section('content')

    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .sidenav {
            width: 15%;
            position: fixed;
            z-index: 1;
            top: 87px;
            left: 10px;
            background: #eee;
            overflow-x: hidden;
            padding: 8px 0;
            display: inline-block;

        }

        .sidenav a {
            display: block;
            margin: 2px auto 4px auto;
            width: 80%;
        }

        .sidenav select{
            display: block;
            margin: 2px auto 4px auto;
            width: 80%;
        }

        .sidenav a:hover {
            color: #064579;
        }

        .main {
            margin-left: 15%; /* Same width as the sidebar + left position in px */
            padding: 0px 10px;
        }

        h1 {
            display: block;
            text-align: center;
            font-size: 2em;
            margin-top: 0.67em;
            margin-bottom: 0.67em;
            margin-left: 0;
            margin-right: 0;
            font-weight: bold;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
    </style>

    <div>
        <div class="sidenav p-1">
            <a class="btn btn-primary" href="{{route('kompiuteris')}}">Kompiuteris</a>
            <a class="btn btn-primary" href="{{route('pildymas')}}">Pildymas</a>
            <select class="form-control form-control-sm" name="cars" onchange="location = this.value;">
                <option>Rikiavimas</option>
                <option value="{{ route('sortByPrice') }}">Pagal kainą.</option>
                <option value="{{ route('sortByName') }}">Pagal pavadinimą.</option>
                <option value="{{ route('sortByCreator') }}">Pagal gamintoją.</option>
            </select>
            <select class="form-control form-control-sm" name="cars" onchange="location = this.value;">
                <option>Filtravimas</option>
                <option value="{{ route('sortByPrice') }}">Pagal kainą.</option>
                <option value="{{ route('sortByName') }}">Pagal pavadinimą.</option>
                <option value="{{ route('sortByCreator') }}">Pagal gamintoją.</option>
            </select>
        </div>
        <div class="main">
            <h1>Katalogas</h1>
            <div class="">

            </div>

            <div class="row p-5">
                @if($parts->count())
                    @foreach($parts as $part)

                        <div class="card col-6 col-md-3" style="width: 18rem;">
                            <img src={{ $part->image }} class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $part->name }}</h5>
                                <p class="card-text">{{ $part->about }}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{ $part->price }} eur.</li>
                                <li class="list-group-item">{{ $part->creator }}</li>
                                <li class="list-group-item">{{ $part->category }}</li>
                            </ul>
                            <div class="card-body">
                                <a href="{{ $part->link }}" class="btn btn-primary">Apžiurėti</a>
                                <a href="{{ route('addPart', $part->id) }}" class="btn btn-success">Pridėti</a>
                            </div>
                        </div>

                    @endforeach
                @else
                    <p>Dabar nėra detalių.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
