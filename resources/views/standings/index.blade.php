@extends('layouts.app')

@section('content')
    <br><br>
    <div class="container">
        <center><h1>STANDINGS</h1></center>
        <div class="row">
            <div class="col-md-12 ">
                @if(Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif
                    {{link_to_route('standings.create', 'Add New Standing', null, ['class'=>'btn btn-primary'])}}
                    <br><br>
                <div class="panel panel-default">
                    <div class="panel-heading">Daftar Standing</div>
                    <div class="panel-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID Standing</th>
                                <th scope="col">Team API ID</th>
                                <th scope="col">Team Name</th>
                                <th scope="col">Match Play</th>
                                <th scope="col">Win</th>
                                <th scope="col">Draw</th>
                                <th scope="col">Lose</th>
                                <th scope="col">Points</th>
                                <th scope="colspan=2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($standings as $standing)
                                <tr>
                                    <th scope="row">{{$standing->id}}</th>
                                    {{--<td><a href="/country/{{$country->id_negara}}">{{$country->kode_negara}}</a></td>--}}
                                    {{--<td>{{link_to_route('klasemen.show', $klasemen->tim_id, [$klasemen->id])}}</td>--}}
                                    <td>{{$standing->team_api_id}}</td>
                                    <td>{{$standing->team_name}}</td>
                                    <td>{{$standing->match_play}}</td>
                                    <td>{{$standing->win}}</td>
                                    <td>{{$standing->draw}}</td>
                                    <td>{{$standing->lose}}</td>
                                    <td>{{$standing->points}}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ URL::to('standings/' . $standing->id . '/edit') }}">
                                                <button type="button" class="btn btn-warning">Edit</button>
                                            </a>&nbsp;
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <form action="{{url('standings', [$standing->id])}}" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="btn btn-danger" value="Delete"/>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection