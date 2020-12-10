@extends('layouts.app')

@section('content')
    <div>
        <div>
            <a class="mt-5" href="{{route('kompiuteris')}}">Mano Kompiuteris </a>
            <form action="{{ route('katalogas') }}" method="post">
                @csrf
                <div>
                    <label for="name">Pavadinimas</label>
                    <input type="text" name="name" id="name" placeholder="Detalės pavadinimas.."></input>
                </div>
                <div>
                    <label for="price">Kaina</label>
                    <input type="number" min="1" step="any" name="price" id="price" placeholder="Detalės kaina.."></input>
                </div>
                <div>
                    <label for="about">Aprašymas</label>
                    <input type="text" name="about" id="about" placeholder="Detalės aprašymas.."></input>
                </div>
                <div>
                    <label for="link">Nuoroda</label>
                    <input type="text" name="link" id="link" placeholder="Detalės nuoroda.."></input>
                </div>
                <div>
                    <label for="creator">Gamintojas</label>
                    <input type="text" name="creator" id="creator" placeholder="Detalės gamintojas.."></input>
                </div>

                <div>
                    <button type="submit">Pridėti</button>
                </div>
            </form>

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
