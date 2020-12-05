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
{{--                            <div class="col-md-4 mb-4">--}}
{{--                                <div>Profilio informacija</div>--}}
{{--                                <div class="text-muted small">Matoma visu</div>--}}
{{--                            </div>--}}
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Name</label>
                                            <input name="name" class="form-control" value="{{Auth::user()->name}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Username</label>
                                            <input name="username" class="form-control" value="{{Auth::user()->username}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Email</label>
                                            <input name ="email" class="form-control" value="{{Auth::user()->email}}">
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
    </div>

@endsection
