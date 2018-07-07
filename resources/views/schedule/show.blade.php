@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading">{{$player->player_name}}</div>
                    <div class="panel-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID Team</th>
                                <th scope="col">Team API ID</th>
                                <th scope="col">Team FIFA API ID</th>
                                <th scope="col">Team Long Name</th>
                                <th scope="col">Team Short Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Build Up Play Speed</th>
                                <th scope="col">Created At</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">{{$team->id_team}}</th>
                                    <th scope="row">{{$team->team_api_id}}</th>
                                    <th scope="row">{{$team->team_fifa_api_id}}</th>
                                    {{--<td><a href="/country/{{$country->id_negara}}">{{$country->kode_negara}}</a></td>--}}

                                    <td>{{$team->team_long_name, [$team->id_team]}}</td>
                                    <td>{{$team->team_short_name}}</td>
                                    {{--$teamAttributes=TeamA::select('revised_price')->get();--}}
                                    <td>{{$team_attributes=\App\TeamAttributes::select('date')->get()}}</td>
                                    <td>{{$team_attributes=\App\TeamAttributes::select('buildUpPlaySpeed')->get()}}</td>
                                    <td>{{$team->created_at}}</td>

                                </tr>
                            </tbody>
                        </table>
                        {{--{{$team->team_short_name}} &nbsp&nbsp {{$team->created_at}};--}}
                        {{--'country_id', \App\Country::all()->pluck('name', 'id_country')->toArray()--}}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection