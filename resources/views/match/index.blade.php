@extends('layouts.app')

@section('content')
    <br><br>
    <div class="container">
        <center><h1>MATCH</h1></center>
        <div class="row">
            <div class="col-md-12 ">
                @if(Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif
                    {{link_to_route('match.create', 'Add New Match', null, ['class'=>'btn btn-primary'])}}
                    <br><br>
                <div class="panel panel-default" style="width: 10000px">
                    <div class="panel-heading">All Matches</div>
                    <div class="panel-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID Match</th>
                                <th scope="col">Country ID</th>
                                <th scope="col">League ID</th>
                                <th scope="col">Season</th>
                                <th scope="col">Stage</th>
                                <th scope="col">Date</th>
                                <th scope="col">Match API ID</th>
                                <th scope="col">Home Team API ID</th>
                                <th scope="col">Away Team API ID</th>
                                <th scope="col">Home Team Goal</th>
                                <th scope="col">Away Team Goal</th>
                                <th scope="col">Home Player X1</th>
                                <th scope="col">Home Player X2</th>
                                <th scope="col">Home Player X3</th>
                                <th scope="col">Home Player X4</th>
                                <th scope="col">Home Player X5</th>
                                <th scope="col">Home Player X6</th>
                                <th scope="col">Home Player X7</th>
                                <th scope="col">Home Player X8</th>
                                <th scope="col">Home Player X9</th>
                                <th scope="col">Home Player X10</th>
                                <th scope="col">Home Player X11</th>
                                <th scope="col">Away Player X1</th>
                                <th scope="col">Away Player X2</th>
                                <th scope="col">Away Player X3</th>
                                <th scope="col">Away Player X4</th>
                                <th scope="col">Away Player X5</th>
                                <th scope="col">Away Player X6</th>
                                <th scope="col">Away Player X7</th>
                                <th scope="col">Away Player X8</th>
                                <th scope="col">Away Player X9</th>
                                <th scope="col">Away Player X10</th>
                                <th scope="col">Away Player X11</th>
                                <th scope="col">Home Player Y1</th>
                                <th scope="col">Home Player Y2</th>
                                <th scope="col">Home Player Y3</th>
                                <th scope="col">Home Player Y4</th>
                                <th scope="col">Home Player Y5</th>
                                <th scope="col">Home Player Y6</th>
                                <th scope="col">Home Player Y7</th>
                                <th scope="col">Home Player Y8</th>
                                <th scope="col">Home Player Y9</th>
                                <th scope="col">Home Player Y10</th>
                                <th scope="col">Home Player Y11</th>
                                <th scope="col">Away Player Y1</th>
                                <th scope="col">Away Player Y2</th>
                                <th scope="col">Away Player Y3</th>
                                <th scope="col">Away Player Y4</th>
                                <th scope="col">Away Player Y5</th>
                                <th scope="col">Away Player Y6</th>
                                <th scope="col">Away Player Y7</th>
                                <th scope="col">Away Player Y8</th>
                                <th scope="col">Away Player Y9</th>
                                <th scope="col">Away Player Y10</th>
                                <th scope="col">Away Player Y11</th>
                                <th scope="col">Home Player 1</th>
                                <th scope="col">Home Player 2</th>
                                <th scope="col">Home Player 3</th>
                                <th scope="col">Home Player 4</th>
                                <th scope="col">Home Player 5</th>
                                <th scope="col">Home Player 6</th>
                                <th scope="col">Home Player 7</th>
                                <th scope="col">Home Player 8</th>
                                <th scope="col">Home Player 9</th>
                                <th scope="col">Home Player 10</th>
                                <th scope="col">Home Player 11</th>
                                <th scope="col">Away Player 1</th>
                                <th scope="col">Away Player 2</th>
                                <th scope="col">Away Player 3</th>
                                <th scope="col">Away Player 4</th>
                                <th scope="col">Away Player 5</th>
                                <th scope="col">Away Player 6</th>
                                <th scope="col">Away Player 7</th>
                                <th scope="col">Away Player 8</th>
                                <th scope="col">Away Player 9</th>
                                <th scope="col">Away Player 10</th>
                                <th scope="col">Away Player 11</th>
                                <th scope="col">Goal</th>
                                <th scope="col">Shot On</th>
                                <th scope="col">Shot Off</th>
                                <th scope="col">Foul Commit</th>
                                <th scope="col">Card</th>
                                <th scope="col">Cross</th>
                                <th scope="col">Corner</th>
                                <th scope="col">Possession</th>
                                <th scope="col">B365H</th>
                                <th scope="col">B365D</th>
                                <th scope="col">B365A</th>
                                <th scope="col">BWH</th>
                                <th scope="col">BWD</th>
                                <th scope="col">BWA</th>
                                <th scope="col">IWH</th>
                                <th scope="col">IWD</th>
                                <th scope="col">IWA</th>
                                <th scope="col">LBH</th>
                                <th scope="col">LBD</th>
                                <th scope="col">LBA</th>
                                <th scope="col">PSH</th>
                                <th scope="col">PSD</th>
                                <th scope="col">PSA</th>
                                <th scope="col">WHH</th>
                                <th scope="col">WHD</th>
                                <th scope="col">WHA</th>
                                <th scope="col">SJH</th>
                                <th scope="col">SJD</th>
                                <th scope="col">SJA</th>
                                <th scope="col">VCH</th>
                                <th scope="col">VCD</th>
                                <th scope="col">VCA</th>
                                <th scope="col">GBH</th>
                                <th scope="col">GBD</th>
                                <th scope="col">GBA</th>
                                <th scope="col">BSH</th>
                                <th scope="col">BSD</th>
                                <th scope="col">BSA</th>
                                <th scope="colspan=2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($matches as $match)
                                <tr>
                                    <th scope="row">{{$match->id}}</th>
                                    <th scope="row">{{$match->country_id}}</th>
                                    <th scope="row">{{$match->league_id}}</th>
                                    {{--<td><a href="/country/{{$country->id_negara}}">{{$country->kode_negara}}</a></td>--}}
                                    <td>{{$match->season}}</td>
                                    <td>{{$match->stage}}</td>
                                    <td>{{$match->date}}</td>
                                    <td>{{$match->match_api_id}}</td>
                                    <td>{{$match->home_team_api_id}}</td>
                                    <td>{{$match->away_team_api_id}}</td>
                                    <td>{{$match->home_team_goal}}</td>
                                    <td>{{$match->away_team_goal}}</td>
                                    <td>{{$match->home_player_X1}}</td>
                                    <td>{{$match->home_player_X2}}</td>
                                    <td>{{$match->home_player_X3}}</td>
                                    <td>{{$match->home_player_X4}}</td>
                                    <td>{{$match->home_player_X5}}</td>
                                    <td>{{$match->home_player_X6}}</td>
                                    <td>{{$match->home_player_X7}}</td>
                                    <td>{{$match->home_player_X8}}</td>
                                    <td>{{$match->home_player_X9}}</td>
                                    <td>{{$match->home_player_X10}}</td>
                                    <td>{{$match->home_player_X11}}</td>
                                    <td>{{$match->away_player_X1}}</td>
                                    <td>{{$match->away_player_X2}}</td>
                                    <td>{{$match->away_player_X3}}</td>
                                    <td>{{$match->away_player_X4}}</td>
                                    <td>{{$match->away_player_X5}}</td>
                                    <td>{{$match->away_player_X6}}</td>
                                    <td>{{$match->away_player_X7}}</td>
                                    <td>{{$match->away_player_X8}}</td>
                                    <td>{{$match->away_player_X9}}</td>
                                    <td>{{$match->away_player_X10}}</td>
                                    <td>{{$match->away_player_X11}}</td>
                                    <td>{{$match->home_player_Y1}}</td>
                                    <td>{{$match->home_player_Y2}}</td>
                                    <td>{{$match->home_player_Y3}}</td>
                                    <td>{{$match->home_player_Y4}}</td>
                                    <td>{{$match->home_player_Y5}}</td>
                                    <td>{{$match->home_player_Y6}}</td>
                                    <td>{{$match->home_player_Y7}}</td>
                                    <td>{{$match->home_player_Y8}}</td>
                                    <td>{{$match->home_player_Y9}}</td>
                                    <td>{{$match->home_player_Y10}}</td>
                                    <td>{{$match->home_player_Y11}}</td>
                                    <td>{{$match->away_player_Y1}}</td>
                                    <td>{{$match->away_player_Y2}}</td>
                                    <td>{{$match->away_player_Y3}}</td>
                                    <td>{{$match->away_player_Y4}}</td>
                                    <td>{{$match->away_player_Y5}}</td>
                                    <td>{{$match->away_player_Y6}}</td>
                                    <td>{{$match->away_player_Y7}}</td>
                                    <td>{{$match->away_player_Y8}}</td>
                                    <td>{{$match->away_player_Y9}}</td>
                                    <td>{{$match->away_player_Y10}}</td>
                                    <td>{{$match->away_player_Y11}}</td>
                                    <td>{{$match->home_player_1}}</td>
                                    <td>{{$match->home_player_2}}</td>
                                    <td>{{$match->home_player_3}}</td>
                                    <td>{{$match->home_player_4}}</td>
                                    <td>{{$match->home_player_5}}</td>
                                    <td>{{$match->home_player_6}}</td>
                                    <td>{{$match->home_player_7}}</td>
                                    <td>{{$match->home_player_8}}</td>
                                    <td>{{$match->home_player_9}}</td>
                                    <td>{{$match->home_player_10}}</td>
                                    <td>{{$match->home_player_11}}</td>
                                    <td>{{$match->away_player_1}}</td>
                                    <td>{{$match->away_player_2}}</td>
                                    <td>{{$match->away_player_3}}</td>
                                    <td>{{$match->away_player_4}}</td>
                                    <td>{{$match->away_player_5}}</td>
                                    <td>{{$match->away_player_6}}</td>
                                    <td>{{$match->away_player_7}}</td>
                                    <td>{{$match->away_player_8}}</td>
                                    <td>{{$match->away_player_9}}</td>
                                    <td>{{$match->away_player_10}}</td>
                                    <td>{{$match->away_player_11}}</td>
                                    <td>{{$match->goal}}</td>
                                    <td>{{$match->shoton}}</td>
                                    <td>{{$match->shotoff}}</td>
                                    <td>{{$match->foulcommit}}</td>
                                    <td>{{$match->card}}</td>
                                    <td>{{$match->cross}}</td>
                                    <td>{{$match->corner}}</td>
                                    <td>{{$match->possession}}</td>
                                    <td>{{$match->B365H}}</td>
                                    <td>{{$match->B365D}}</td>
                                    <td>{{$match->B365A}}</td>
                                    <td>{{$match->BWH}}</td>
                                    <td>{{$match->BWD}}</td>
                                    <td>{{$match->BWA}}</td>
                                    <td>{{$match->IWH}}</td>
                                    <td>{{$match->IWD}}</td>
                                    <td>{{$match->IWA}}</td>
                                    <td>{{$match->LBH}}</td>
                                    <td>{{$match->LBD}}</td>
                                    <td>{{$match->LBA}}</td>
                                    <td>{{$match->PSH}}</td>
                                    <td>{{$match->PSD}}</td>
                                    <td>{{$match->PSA}}</td>
                                    <td>{{$match->WHH}}</td>
                                    <td>{{$match->WHD}}</td>
                                    <td>{{$match->WHA}}</td>
                                    <td>{{$match->SJH}}</td>
                                    <td>{{$match->SJD}}</td>
                                    <td>{{$match->SJA}}</td>
                                    <td>{{$match->VCH}}</td>
                                    <td>{{$match->VCD}}</td>
                                    <td>{{$match->VCA}}</td>
                                    <td>{{$match->GBH}}</td>
                                    <td>{{$match->GBD}}</td>
                                    <td>{{$match->GBA}}</td>
                                    <td>{{$match->BSH}}</td>
                                    <td>{{$match->BSD}}</td>
                                    <td>{{$match->BSA}}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ URL::to('match/' . $match->id . '/edit') }}">
                                                <button type="button" class="btn btn-warning">Edit</button>
                                            </a>&nbsp;
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <form action="{{url('match', [$match->id])}}" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="btn btn-danger" value="Delete"/>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                {{--{{ $playerAttribute->links('playerAttributes', ['foo' => 'bar']) }}--}}
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                    {{ $matches->links() }}<br>

            </div>
        </div>
    </div>
@endsection