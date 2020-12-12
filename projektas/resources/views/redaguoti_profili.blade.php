@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                        <div class="card-header bg-light">
                            Profilio redagavimas
                        </div>
                        <form action="{{route('redaguoti_profilipost')}}" method="post">
                            @csrf
                        <div class="card-body">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Vardas</label>
                                            <input name="name" class="form-control" value="{{Auth::user()->vardas}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Pavardė</label>
                                            <input name="lastname" class="form-control" value="{{Auth::user()->pavarde}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">El.paštas</label>
                                            <input name ="email" class="form-control" value="{{Auth::user()->email}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Telefono numeris</label>
                                            <input name ="phone" class="form-control" value="{{Auth::user()->telefono_nr}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Gimimo metai</label>
                                            <input name ="date" class="form-control" value="{{Auth::user()->gimimo_metai}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-light ">
                                <div class="small">*Norint pakeisti savo duomenis būtina įrašyti telefono numerį ir gimimo metus </div>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
