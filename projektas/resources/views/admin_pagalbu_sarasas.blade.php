@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-15">
                <div class="card">
                    <div class="card-header">{{ __('Pagalbų sąrašas') }}</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Klientas</th>
                                <th>Tema</th>
                                <th>Veiksmas</th>
                            </tr>
                            @foreach($pokalbiai as $pokalbis)
                                @if($pokalbis->administratorius_id==$admin_id || $pokalbis->administratorius_id==null)
                                <tr>
                                    <td>
                                        {{$pokalbis->klientas->user->username}}
                                    </td>
                                    <td>
                                        {{$pokalbis->tema}}
                                    </td>
                                    <td>
                                        <a href="{{route('admin_pokalbio_langas', $pokalbis->id)}}"><button class="btn btn-primary" style="margin: 5px">Pokalbis</button></a>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
