@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading">{{$kejuaraan->nama_kejuaraan}}</div>
                    <div class="panel-body">
                        {{$kejuaraan->tahun}} &nbsp&nbsp {{$kejuaraan->created_at}};

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection