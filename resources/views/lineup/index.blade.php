@extends('layouts.app')

@section('content')
    <br><br>
    <div class="container">
        <center><h1>LINEUP</h1></center>
        <div class="row">
            <div class="col-md-12 ">
                @if(Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif
                    {{link_to_route('lineup.create', 'Add New Lineup', null, ['class'=>'btn btn-primary'])}}
                    <br><br>
                <div class="panel panel-default"  style="width: 5000px">
                    <div class="panel-heading">Daftar Lineup</div>
                    <div class="panel-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID Lineup</th>
                                <th scope="col">Schedule</th>
                                <th scope="col">HP 1</th>
                                <th scope="col">Posisi HP 1</th>
                                <th scope="col">HP 2</th>
                                <th scope="col">Posisi HP 2</th>
                                <th scope="col">HP 3</th>
                                <th scope="col">Posisi HP 3</th>
                                <th scope="col">HP 4</th>
                                <th scope="col">Posisi HP 4</th>
                                <th scope="col">HP 5</th>
                                <th scope="col">Posisi HP 5</th>
                                <th scope="col">HP 6</th>
                                <th scope="col">Posisi HP 6</th>
                                <th scope="col">HP 7</th>
                                <th scope="col">Posisi HP 7</th>
                                <th scope="col">HP 8</th>
                                <th scope="col">Posisi HP 8</th>
                                <th scope="col">HP 9</th>
                                <th scope="col">Posisi HP 9</th>
                                <th scope="col">HP 10</th>
                                <th scope="col">Posisi HP 10</th>
                                <th scope="col">HP 11</th>
                                <th scope="col">Posisi HP 11</th>
                                <th scope="col">AP 1</th>
                                <th scope="col">Posisi AP 1</th>
                                <th scope="col">AP 2</th>
                                <th scope="col">Posisi AP 2</th>
                                <th scope="col">AP 3</th>
                                <th scope="col">Posisi AP 3</th>
                                <th scope="col">AP 4</th>
                                <th scope="col">Posisi AP 4</th>
                                <th scope="col">AP 5</th>
                                <th scope="col">Posisi AP 5</th>
                                <th scope="col">AP 6</th>
                                <th scope="col">Posisi AP 6</th>
                                <th scope="col">AP 7</th>
                                <th scope="col">Posisi AP 7</th>
                                <th scope="col">AP 8</th>
                                <th scope="col">Posisi AP 8</th>
                                <th scope="col">AP 9</th>
                                <th scope="col">Posisi AP 9</th>
                                <th scope="col">AP 10</th>
                                <th scope="col">Posisi AP 10</th>
                                <th scope="col">AP 11</th>
                                <th scope="col">Posisi AP 11</th>
                                <th scope="colspan=2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lineups as $lineup)
                                <tr>
                                    <th scope="row">{{$lineup->id}}</th>
                                    {{--<td><a href="/country/{{$country->id_negara}}">{{$country->kode_negara}}</a></td>--}}
                                    <td>{{link_to_route('lineup.show', $lineup->schedule_id, [$lineup->id])}}</td>
                                    <td>{{$lineup->home_player_1}}</td>
                                    <td>{{$lineup->position_home_player1}}</td>
                                    <td>{{$lineup->home_player_2}}</td>
                                    <td>{{$lineup->position_home_player2}}</td>
                                    <td>{{$lineup->home_player_3}}</td>
                                    <td>{{$lineup->position_home_player3}}</td>
                                    <td>{{$lineup->home_player_4}}</td>
                                    <td>{{$lineup->position_home_player4}}</td>
                                    <td>{{$lineup->home_player_5}}</td>
                                    <td>{{$lineup->position_home_player5}}</td>
                                    <td>{{$lineup->home_player_6}}</td>
                                    <td>{{$lineup->position_home_player6}}</td>
                                    <td>{{$lineup->home_player_7}}</td>
                                    <td>{{$lineup->position_home_player7}}</td>
                                    <td>{{$lineup->home_player_8}}</td>
                                    <td>{{$lineup->position_home_player8}}</td>
                                    <td>{{$lineup->home_player_9}}</td>
                                    <td>{{$lineup->position_home_player9}}</td>
                                    <td>{{$lineup->home_player_10}}</td>
                                    <td>{{$lineup->position_home_player10}}</td>
                                    <td>{{$lineup->home_player_11}}</td>
                                    <td>{{$lineup->position_home_player11}}</td>
                                    <td>{{$lineup->away_player_1}}</td>
                                    <td>{{$lineup->position_away_player1}}</td>
                                    <td>{{$lineup->away_player_2}}</td>
                                    <td>{{$lineup->position_away_player2}}</td>
                                    <td>{{$lineup->away_player_3}}</td>
                                    <td>{{$lineup->position_away_player3}}</td>
                                    <td>{{$lineup->away_player_4}}</td>
                                    <td>{{$lineup->position_away_player4}}</td>
                                    <td>{{$lineup->away_player_5}}</td>
                                    <td>{{$lineup->position_away_player5}}</td>
                                    <td>{{$lineup->away_player_6}}</td>
                                    <td>{{$lineup->position_away_player6}}</td>
                                    <td>{{$lineup->away_player_7}}</td>
                                    <td>{{$lineup->position_away_player7}}</td>
                                    <td>{{$lineup->away_player_8}}</td>
                                    <td>{{$lineup->position_away_player8}}</td>
                                    <td>{{$lineup->away_player_9}}</td>
                                    <td>{{$lineup->position_away_player9}}</td>
                                    <td>{{$lineup->away_player_10}}</td>
                                    <td>{{$lineup->position_away_player10}}</td>
                                    <td>{{$lineup->away_player_11}}</td>
                                    <td>{{$lineup->position_away_player11}}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ URL::to('lineup/' . $lineup->id . '/edit') }}">
                                                <button type="button" class="btn btn-warning">Edit</button>
                                            </a>&nbsp;
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <form action="{{url('lineup', [$lineup->id])}}" method="POST">
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