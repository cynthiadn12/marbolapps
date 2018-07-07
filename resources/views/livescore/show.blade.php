@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading">{{$livescore->time}}</div>
                    <div class="panel-body">
                        {{$livescore->home_player}} &nbsp&nbsp {{$livescore->do1}} &nbsp&nbsp {{$livescore->home_score}} <br>
                        {{$livescore->away_player}} &nbsp&nbsp {{$livescore->do2}} &nbsp&nbsp {{$livescore->away_score}};

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection