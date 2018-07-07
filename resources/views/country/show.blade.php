@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading">{{$country->kode_negara}}</div>
                    <div class="panel-body">
                        {{$country->nama_negara}} &nbsp&nbsp {{$country->created_at}};

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection