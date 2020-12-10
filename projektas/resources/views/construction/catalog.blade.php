@extends('layouts.app')

@section('content')
    <div>
        <div>
            <a class="mt-5" href="{{route('kompiuteris')}}">Mano Kompiuteris </a>
            <a class="mt-5" href="{{route('pildymas')}}">Detalių pildymas - Admin </a>

            <div class="m-5 d-flex p-1 bg-dark text-white justify-content-center">
                Rikiuoti pagal:
                <form action="{{ route('sortByPrice') }}" method="get">
                    @csrf
                    <button type="submit">Kainą</button>
                </form>
                <form action="{{ route('sortByName') }}" method="get">
                    @csrf
                    <button type="submit">Pavadinimą</button>
                </form>
                <form action="{{ route('sortByCreator') }}" method="get">
                    @csrf
                    <button type="submit">Gamintoją</button>
                </form>
            </div>

            <div class="px-5 pb-5">
                @if($parts->count())
                    @foreach($parts as $part)
                        <div class="d-flex p-1 bg-dark text-white">
                            <p class="px-3 ">{{ $part->name }}</p>
                            <p class="px-3">{{ $part->price }}</p>
                            <p class="px-3">{{ $part->about }}</p>
                            <a class="px-3" href={{ $part->link }}>Apžiūrėti detalę</a>
                            <p class="px-3">Nuotrauka</p>
                            <p class="px-3">{{ $part->creator }}</p>
                            <form action="{{ route('addPart', $part->id) }}" method="get">
                                @csrf
                                <button type="submit">Įsidėti detalę</button>
                            </form>
                        </div>
                    @endforeach
                @else
                    <p>There are no parts currently.</p>
                @endif
            </div>

        </div>
    </div>
@endsection
