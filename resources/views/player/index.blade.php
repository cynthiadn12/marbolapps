@extends('layouts.app')

@section('content')
    <br><br>
    <div class="container">
        <center><h1>PLAYER</h1></center>
        <div class="row">
            <div class="col-md-12 ">
                @if(Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif
                    {{link_to_route('player.create', 'Add New Player', null, ['class'=>'btn btn-primary'])}}
                    <br><br>
                <div class="panel panel-default">
                    <div class="panel-heading">All Players</div>
                    <div class="panel-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID Player</th>
                                <th scope="col">Player API ID</th>
                                <th scope="col">Player FIFA API ID</th>
                                <th scope="col">Team API ID</th>
                                <th scope="col">Player Name</th>
                                <th scope="col">Player Birthday</th>
                                <th scope="col">Player Height</th>
                                <th scope="col">Player Weight</th>
                                <th scope="colspan=2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($players as $player)
                                <tr>
                                    <th scope="row">{{$player->id}}</th>
                                    <th scope="row">{{$player->player_api_id}}</th>
                                    <th scope="row">{{$player->player_fifa_api_id}}</th>
                                    <th scope="row">{{$player->team_api_id}}</th>
                                    <th scope="row">{{$player->player_name}}</th>
                                    {{--<td><a href="/country/{{$country->id_negara}}">{{$country->kode_negara}}</a></td>--}}
                                    <td>{{$player->birthday}}</td>
                                    <td>{{$player->height}}</td>
                                    <td>{{$player->weight}}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ URL::to('player/' . $player->id . '/edit') }}">
                                                <button type="button" class="btn btn-warning">Edit</button>
                                            </a>&nbsp;
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <form action="{{url('player', [$player->id])}}" method="POST">
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
                    {{ $players->links() }}

            </div>
        </div>
    </div>
@endsection