@extends('layouts.app')

@section('content')
        <div class="container">

            <form method="POST" action="{{ route('siusti_zinute_klientas', $pokalbis) }}">
                @csrf
                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="zinute" type="text" class="form-control" name="zinute" value="" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">
                    {{ __('Siusti zinute') }}
                </button>
            </form>

            <div class="card" style="margin-top: 30px">
                <div style="overflow: auto; height: 500px">
                    <table class="table">
                        @foreach($zinutes as $zinute)
                            <tr>
                                <td><b>{{$zinute->siuntejas}}</b> - {{$zinute->tekstas}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

@endsection
