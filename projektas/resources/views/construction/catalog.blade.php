@extends('layouts.app')

@section('content')
    <div>
        <div>
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

            <div>
                Rikiuoti pagal:
                <form action="" method="post">
                    @csrf
                    <button type="submit">Kaina</button>
                </form>
            </div>

            <div class="p-5">
                @if($parts->count())
                    @foreach($parts as $part)
                        <div class="d-flex p-1 bg-dark text-white">
                            <p class="px-3 ">{{ $part->name }}</p>
                            <p class="px-3">{{ $part->price }}</p>
                            <p class="px-3">{{ $part->about }}</p>
                            <a class="px-3" href={{ $part->link }}>Apžiūrėti detalę</a>
                            <p class="px-3">Nuotrauka</p>
                            <p class="px-3">{{ $part->creator }}</p>
                            <form action="{{ route('sortByPrice') }}" method="get">
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
