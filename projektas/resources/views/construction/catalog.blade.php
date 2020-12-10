@extends('layouts.app')

@section('content')
    <div>
        <div>
            <div class="">
                <a class="mt-5" href="{{route('kompiuteris')}}">Mano Kompiuteris </a>
                <a class="mt-5" href="{{route('pildymas')}}">Detalių pildymas - Admin </a>

                <select name="cars" onchange="location = this.value;">
                    <option>Rikiuoti pagal</option>
                    <option value="{{ route('sortByPrice') }}">Pagal kainą.</option>
                    <option value="{{ route('sortByName') }}">Pagal pavadinimą.</option>
                    <option value="{{ route('sortByCreator') }}">Pagal gamintoją.</option>
                </select>
            </div>

            <div class="row p-5">
                @if($parts->count())
                    @foreach($parts as $part)

                        <div class="card col-6 col-md-3" style="width: 18rem;">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/71nDX36Y9UL._AC_SL1026_.jpg" class="card-img-top" alt="...">
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
                                <a href="{{ $part->link }}" class="card-link">Apžiurėti</a>
                                <a href="{{ route('addPart', $part->id) }}" class="card-link">Pridėti</a>
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
