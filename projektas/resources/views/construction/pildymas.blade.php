@extends('layouts.app')

@section('content')
        <div>
            <form action="{{ route('pildymas') }}" method="post">
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

    </div>
@endsection
