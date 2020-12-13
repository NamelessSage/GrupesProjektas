@extends('layouts.app')

@section('content')
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
    <div class="container" style="float: left">

        <div class="card">

            <div style="overflow: auto; height: 500px">
                <table class="table">
                    @foreach($zinutes as $zinute)
                        <tr>
                            <td>{{$zinute->siuntejas}} - {{$zinute->tekstas}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
