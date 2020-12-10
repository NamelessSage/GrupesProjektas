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
                            <img style="width: 50px; height: 50px" src={{ $part->image }}>
                            <p class="px-3">{{ $part->category }}</p>
                            <p class="px-3">{{ $part->creator }}</p>
                            <form action="{{ route('deletePart', $part->id) }}" method="get">
                                @csrf
                                <button type="submit">Ištrinti detalę</button>
                            </form>
                        </div>
                    @endforeach
                        <form action="" method="get">
                            @csrf
                            <button type="submit">Patvirtinti užsakymą</button>
                        </form>
                @else
                    <p>There are no parts currently.</p>
                @endif
            </div>

@endsection
