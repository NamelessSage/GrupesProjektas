@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-15">
                <div class="card">
                    <div class="card-header">{{ __('Klientu sarasas') }}</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Uzsakymo id</th>
                                <th>Kaina</th>
                                <th>Veiksmas</th>
                            </tr>
                            @foreach($uzsakymai as $uzsakymas)
                                <tr>
                                    <td>{{ $uzsakymas->status }} </td>
                                    <td>kaina </td>
                                    <td>
                                        <a href="{{route('admin_uzsakymai_patvirtinti', $uzsakymas->id)}}"><button class="btn btn-primary" style="margin: 5px">Patvirtinti</button></a>
                                        <a href="{{route('admin_uzsakymai_atmesti', $uzsakymas->id)}}"><button class="btn btn-primary" style="margin: 5px">Atmesti</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
