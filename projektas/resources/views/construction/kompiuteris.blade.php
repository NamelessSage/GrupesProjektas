@extends('layouts.app')

@section('content')
            Užsakymas:
            <div class="row p-5">
                @if($values!=null)
                    @foreach($values as $part)

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
                                <a href="{{ $part->link }}" class="card-link">Apžiurėti</a>
                                <a href="{{ route('deletePart', $part->id) }}" class="card-link">Išmesti</a>
                            </div>
                        </div>

                    @endforeach
{{--                        <form method="get" action="{{ route('addToCart', $values) }}">--}}
{{--                            @csrf--}}
{{--                            <input type="hidden" name="values" value="{{ $values}}">--}}
{{--                            <button type="submit" name="button" class="btn btn-orange">Add to cart</button>--}}
{{--                        </form>--}}
                        <a href="{{ route('addToCart') }}" class="card-link">adina</a>
{{--                        <a href="{{ route('cart.add, $values') }}"><button  type="button" name="button" class="btn btn-orange">Add to cart</button></a>--}}
                @else
                    <p>Dabar nėra detalių.</p>
                @endif
            </div>

@endsection
