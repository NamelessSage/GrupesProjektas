@extends('layouts.app')



@section('content')
    <h2 class="cartTitle">Prekių krepšelis</h2>
    <div class="">

        @foreach ($cart->cart_parts as $cart_part)
            <div class="modal fade bd-example-modal-lg" id="model-{{$cart_part->id}}" tabindex="-1" role="dialog" aria-labelledby="model-{{$cart_part->id}}" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="image">
                                <img width="200px" src="{{ $cart_part->part->image }}" alt="jack">
                            </div>

                            <div class="card-content">

                                <div class="title">
                                    <h3>{{  $cart_part->part->name }}</h3>
                                </div>

                                <div class="price">
                                    <h4>{{  $cart_part->part->price }}€</h4>
                                </div>

                                <div class="description">
                                    <p>{{  $cart_part->part->about }}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table container">
                <tbody>
                <tr>
                    <td><img width="150px" src="{{ $cart_part->part->image }}" alt="{{ $cart_part->image }}"></td>
                    <td><h3>{{ $cart_part->part->name }}</h3></td>
                    <td>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#model-{{$cart_part->id}}" type="button" name="button">Apžiūrėti</button>
                    </td>

                    <td><h4>{{ $cart_part->total_price }}€</h4></td>
                    <form method="post" action="{{ route('changeQuantity', $cart_part)}}">
                        @csrf
                        <td>
                            <div class="qty">
                                <input type="number" name="qty" value="{{ $cart_part->quantity }}" min="0" >
                                <button type="submit" class="btn btn-primary">Išsaugoti</button>
                            </div>


                        </td>
                    </form>
                    <td>
                        <form class="" action="{{ route('destroyCartPart', $cart_part->id) }}" method="get">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Pašalinti</button>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>

                </div>


                @endforeach
    <hr class="sepLine">
        <div class="container">
            <form action="{{ route('createDiscount', $cart) }}" method="get">
                <label for="discount">Įveskite nuolaidos kodą: </label>
                <div class="discount">
                    <input class="form-control" type="text" name="discount" id="">
                    <button class="btn btn-dark" type="submit">Patvirtinti</button>
                </div>

            </form>

            <div class="checkout">

                <div class="total-price">
                    <h4>Galutinė kaina: <b>{{ $cart->getTotalPrice()}}</b></h4>
                </div>

                <div class="buy-btn">
                    <a href="{{ route('makeOrder', $cart) }}"> <button type="button" name="button" class="btn btn-success">Apmokėti</button> </a>
                </div>
            </div>
        </div>

    </div>

@endsection
