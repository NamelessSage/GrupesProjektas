@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="">
            <div class="col-md-15">
                <div class="card">
                    <div class="card-header">{{ __('Pagalbu sarasas') }}</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Klientas</th>
                                <th>Tema</th>
                                <th>Veiksmas</th>
                            </tr>
                            @foreach($pokalbiai as $pokalbis)
                                    <tr>
                                        <td>
                                            {{$pokalbis->klientas->user->username}}
                                        </td>
                                        <td>
                                            {{$pokalbis->tema}}
                                        </td>
                                        <td>
                                            <a href="{{route('pokalbio_langas', $pokalbis->id)}}"><button class="btn btn-primary" style="margin: 5px">Rasyti</button></a>
                                        </td>
                                    </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

                <div class="card-header bg-light">
                        Profilio redagavimas
                    </div>
                    <form action="pridet_pagalba" method="post">
                        @csrf
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="">
                                        <div class="form-group">
                                            <label class="form-control-label">Tema</label>
                                            <input name ="tema" type = "text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <div class="">
                            <div class="">
                                <div class="">
                                    <div class="form-group">
                                        <label class="form-control-label">Klausimas</label>
                                        <input name ="tekstas" type = "text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="card-footer bg-light ">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </form>
                  </div>
             </div>
        </div>
    </div>

@endsection
