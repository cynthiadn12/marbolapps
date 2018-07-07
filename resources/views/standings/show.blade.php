@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading">{{$klasemen->nama_tim}}</div>
                    <div class="panel-body">
                        {{$klasemen->w}} &nbsp&nbsp {{$klasemen->d}} &nbsp&nbsp {{$klasemen->gf}} &nbsp&nbsp {{$klasemen->ga}};

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection