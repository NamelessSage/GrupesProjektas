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
