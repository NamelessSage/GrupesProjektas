@extends('layouts.app')

@section('content')

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert data</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="add" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Atsiliepimai apie svetaine</label>
                    <input type="text" class="form-control"name="tekstas" placeholder="Komentaras">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                </div>
            </form>
            <table class=" table table-hover">
                <thead>
                <th>Atsiliepimai</th>
                </thead>
                <tbody>
                @foreach($list as $item)
                    <tr>
                    <td>{{$item->user}}</td>
                    <td>{{$item->tekstas}}</td>
                    <td>{{$item->created_at}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
@endsection
