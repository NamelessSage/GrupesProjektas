@extends('layouts.app')

@section('content')
        <div class="input-group mb-3 d-flex p-2 justify-content-center">
            <div class="input-group-prepend">
                <form action="{{ route('pildymas') }}" method="post">
                    @csrf
                    <div>
                        <h1 class="m-2">Detalių pildymas</h1>
                    </div>
                    <div>
                        <input  class="form-control m-2" type="text" name="name" id="name" placeholder="Detalės pavadinimas.."></input>
                    </div>
                    <div>
                        <input class="form-control m-2" type="number" min="1" step="any" name="price" id="price" placeholder="Detalės kaina.."></input>
                    </div>
                    <div>
                        <input class="form-control m-2" type="text" name="about" id="about" placeholder="Detalės aprašymas.."></input>
                    </div>
                    <div>
                        <input class="form-control m-2" type="text" name="link" id="link" placeholder="Detalės nuoroda.."></input>
                    </div>

                    <div>
                        <input class="form-control m-2" type="text" name="image" id="image" placeholder="Detalės nuotrauka.."></input>
                    </div>

                    <div>
                        <input class="form-control m-2" type="text" name="category" id="category" placeholder="Detalės kategorija.."></input>
                    </div>

                    <div>
                        <input class="form-control m-2" type="text" name="creator" id="creator" placeholder="Detalės gamintojas.."></input>
                    </div>

                    <div>
                        <button class="btn btn-primary m-2" type="submit">Pridėti</button>
                    </div>
                </form>
            </div>
    </div>
@endsection
