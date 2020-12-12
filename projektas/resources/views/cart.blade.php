@extends('layouts.app')



@section('content')
    <h2>Prekių krepšelis</h2>
    <div class="float-container">

        @foreach ($cart->cart_parts as $cart_part)
            <table class="table">
                <tbody>
                <tr>
                    <td><img src="{{ $cart_part->part->image }}" alt="{{ $cart_part->image }}"></td>
                    <td><h3>{{ $cart_part->part->name }}</h3></td>
                    <td><input type="number" wire:model="item_qty" wire:change="updateCart({{ $cart_part }})" value="{{ $cart_part->quantity }}" ></td>
                    <td><h4>{{ $cart_part->total_price }}€</h4></td>
                    <td>
                        <form class="" action="{{ route('destroyCartPart', $cart_part->id) }}" method="get">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>

                </div>


                @endforeach

        <form action="{{ route('createDiscount', $cart) }}" method="get">
            <label for="discount">Įveskite nuolaidos kodą</label>
            <input type="text" name="discount" id="">
            <button type="submit">Patvirtinti</button>
        </form>

        <div class="check-out">

            <div class="total-price">
                <h4>Total price: <b>{{ $cart->getTotalPrice()}}</b></h4>
            </div>

            <div class="buy-btn">
                <a href="{{ route('makeOrder', $cart) }}"> <button type="button" name="button" class="btn btn-success">CHECK-OUT</button> </a>
            </div>
        </div>
    </div>

@endsection
