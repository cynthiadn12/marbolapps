@extends('layouts.app')

@section('content')
    <br><br>
    <div class="container">
        <center><h1>TEAM ATTRIBUTES</h1></center>
        <div class="row">
            <div class="col-md-12 ">
                @if(Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif
                    {{link_to_route('teamAttributes.create', 'Add New Team Attribute', null, ['class'=>'btn btn-primary'])}}
                    <br><br>
                <div class="panel panel-default"  style="width: 7000px">
                    <div class="panel-heading">All Teams Attributes</div>
                    <div class="panel-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID Team</th>
                                <th scope="col">Team API ID</th>
                                <th scope="col">Team FIFA API ID</th>
                                <th scope="col">Date</th>
                                <th scope="col">Build Up Play Speed</th>
                                <th scope="col">Build Up Play Speed Class</th>
                                <th scope="col">Build Up Play Dribbling</th>
                                <th scope="col">Build Up Play Dribbling Class</th>
                                <th scope="col">Build Up Play Passing</th>
                                <th scope="col">Build Up Play Passing Class</th>
                                <th scope="col">Build Up Play Positioning Class</th>
                                <th scope="col">Chance Creation Passing</th>
                                <th scope="col">Chance Creation Passing Class</th>
                                <th scope="col">Chance Creation Crossing</th>
                                <th scope="col">Chance Creation Crossing Class</th>
                                <th scope="col">Chance Creation Shooting</th>
                                <th scope="col">Chance Creation Shooting Class</th>
                                <th scope="col">Chance Creation Positioning Class</th>
                                <th scope="col">Defence Preasure</th>
                                <th scope="col">Defence Preasure Class</th>
                                <th scope="col">Defence Aggression</th>
                                <th scope="col">Defence Aggression Class</th>
                                <th scope="col">Defence Team Width</th>
                                <th scope="col">Defence Team Width Class</th>
                                <th scope="col">Defence Defender Line Class</th>
                                <th scope="colspan=2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teamAttributes as $teamAttribute)
                                <tr>
                                    <th scope="row">{{$teamAttribute->id}}</th>
                                    <th scope="row">{{$teamAttribute->team_api_id}}</th>
                                    <th scope="row">{{$teamAttribute->team_fifa_api_id}}</th>
                                    <td>{{$teamAttribute->date}}</td>
                                    <td>{{$teamAttribute->buildUpPlaySpeed}}</td>
                                    <td>{{$teamAttribute->buildUpPlaySpeedClass}}</td>
                                    <td>{{$teamAttribute->buildUpPlayDribbling}}</td>
                                    <td>{{$teamAttribute->buildUpPlayDribblingClass}}</td>
                                    <td>{{$teamAttribute->buildUpPlayPassing}}</td>
                                    <td>{{$teamAttribute->buildUpPlayPassingClass}}</td>
                                    <td>{{$teamAttribute->buildUpPlayPositioningClass}}</td>
                                    <td>{{$teamAttribute->chanceCreationPassing}}</td>
                                    <td>{{$teamAttribute->chanceCreationPassingClass}}</td>
                                    <td>{{$teamAttribute->chanceCreationCrossing}}</td>
                                    <td>{{$teamAttribute->chanceCreationCrossingClass}}</td>
                                    <td>{{$teamAttribute->chanceCreationShooting}}</td>
                                    <td>{{$teamAttribute->chanceCreationShootingClass}}</td>
                                    <td>{{$teamAttribute->chanceCreationPositioningClass}}</td>
                                    <td>{{$teamAttribute->defencePressure}}</td>
                                    <td>{{$teamAttribute->defencePressureClass}}</td>
                                    <td>{{$teamAttribute->defenceAggression}}</td>
                                    <td>{{$teamAttribute->defenceAggressionClass}}</td>
                                    <td>{{$teamAttribute->defenceTeamWidth}}</td>
                                    <td>{{$teamAttribute->defenceTeamWidthClass}}</td>
                                    <td>{{$teamAttribute->defenceDefenderLineClass}}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ URL::to('teamAttributes/' . $teamAttribute->id . '/edit') }}">
                                                <button type="button" class="btn btn-warning">Edit</button>
                                            </a>&nbsp;
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <form action="{{url('teamAttributes', [$teamAttribute->id])}}" method="POST">
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
                    {{ $teamAttributes->links() }}

            </div>
        </div>
    </div>
@endsection