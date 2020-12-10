@extends('layouts.app')

@section('content')
            Užsakymas:
            <div class="px-5">
                @if($values!=null)
                    @foreach($values as $part)
                        <div class="d-flex p-1 bg-dark text-white">
                            <p class="px-3 ">{{ $part->name }}</p>
                            <p class="px-3">{{ $part->price }}</p>
                            <p class="px-3">{{ $part->about }}</p>
                            <a class="px-3" href={{ $part->link }}>Apžiūrėti detalę</a>
                            <p class="px-3">Nuotrauka</p>
                            <p class="px-3">{{ $part->creator }}</p>
                            <form action="{{ route('deletePart', $part->id) }}" method="get">
                                @csrf
                                <button type="submit">Ištrinti detalę</button>
                            </form>
                        </div>
                    @endforeach
                @else
                    <p>There are no parts currently.</p>
                @endif
            </div>
@endsection
