@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading">{{$lineup->schedule_id}}</div>
                    <div class="panel-body">
                        {{--{{$lineup->posisi}} &nbsp&nbsp {{$lineup->no_punggung}};--}}

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection