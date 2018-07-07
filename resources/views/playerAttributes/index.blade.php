@extends('layouts.app')

@section('content')
    <br><br>
    <div class="container">
        <center><h1>PLAYER ATTRIBUTES</h1></center>
        <div class="row">
            <div class="col-md-12 ">
                @if(Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif
                    {{link_to_route('playerAttributes.create', 'Add New Player Attribute', null, ['class'=>'btn btn-primary'])}}
                    <br><br>
                <div class="panel panel-default"  style="width: 9000px">
                    <div class="panel-heading">All Player Attributes</div>
                    <div class="panel-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID Player Attributes</th>
                                <th scope="col">Player API ID</th>
                                <th scope="col">Player FIFA API ID</th>
                                <th scope="col">Date</th>
                                <th scope="col">Player Overall Rating</th>
                                <th scope="col">Player Potential</th>
                                <th scope="col">Player Preferred Foot</th>
                                <th scope="col">Player Attacking Work Rate</th>
                                <th scope="col">Player Defensive Work Rate </th>
                                <th scope="col">Player Crossing</th>
                                <th scope="col">Player Finishing</th>
                                <th scope="col">Player Heading Accuracy</th>
                                <th scope="col">Player Short Passing</th>
                                <th scope="col">Player Volleys</th>
                                <th scope="col">Player Dribbling</th>
                                <th scope="col">Player Curve</th>
                                <th scope="col">Player Free Kick Accuracy</th>
                                <th scope="col">Player Long Passing</th>
                                <th scope="col">Player Ball Control</th>
                                <th scope="col">Player Acceleration</th>
                                <th scope="col">Player Sprint Speed</th>
                                <th scope="col">Player Agility</th>
                                <th scope="col">Player Reactions</th>
                                <th scope="col">Player Balance</th>
                                <th scope="col">Player Shot Power</th>
                                <th scope="col">Player Jumping </th>
                                <th scope="col">Player Stamina</th>
                                <th scope="col">Player Strength</th>
                                <th scope="col">Player Long Shots</th>
                                <th scope="col">Player Aggression</th>
                                <th scope="col">Player Interceptions</th>
                                <th scope="col">Player Positioning</th>
                                <th scope="col">Player Vision</th>
                                <th scope="col">Player Penalties</th>
                                <th scope="col">Player Marking</th>
                                <th scope="col">Player Standing Tackle</th>
                                <th scope="col">Player Sliding Tackle</th>
                                <th scope="col">Player GK Diving</th>
                                <th scope="col">Player GK Handling</th>
                                <th scope="col">Player GK Kicking</th>
                                <th scope="col">Player GK Positioning</th>
                                <th scope="col">Player GK Reflexes</th>
                                <th scope="colspan=2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($playerAttributes as $playerAttribute)
                                <tr>
                                    <th scope="row">{{$playerAttribute->id}}</th>
                                    <th scope="row">{{$playerAttribute->player_api_id}}</th>
                                    <th scope="row">{{$playerAttribute->player_fifa_api_id}}</th>
                                    {{--<td><a href="/country/{{$country->id_negara}}">{{$country->kode_negara}}</a></td>--}}
                                    <td>{{$playerAttribute->date}}</td>
                                    <td>{{$playerAttribute->overall_rating}}</td>
                                    <td>{{$playerAttribute->potential}}</td>
                                    <td>{{$playerAttribute->preferred_foot}}</td>
                                    <td>{{$playerAttribute->attacking_work_rate}}</td>
                                    <td>{{$playerAttribute->defensive_work_rate}}</td>
                                    <td>{{$playerAttribute->crossing}}</td>
                                    <td>{{$playerAttribute->finishing}}</td>
                                    <td>{{$playerAttribute->heading_accuracy}}</td>
                                    <td>{{$playerAttribute->short_passing}}</td>
                                    <td>{{$playerAttribute->volleys}}</td>
                                    <td>{{$playerAttribute->dribbling}}</td>
                                    <td>{{$playerAttribute->curve}}</td>
                                    <td>{{$playerAttribute->free_kick_accuracy}}</td>
                                    <td>{{$playerAttribute->long_passing}}</td>
                                    <td>{{$playerAttribute->ball_control}}</td>
                                    <td>{{$playerAttribute->acceleration}}</td>
                                    <td>{{$playerAttribute->sprint_speed}}</td>
                                    <td>{{$playerAttribute->agility}}</td>
                                    <td>{{$playerAttribute->reactions}}</td>
                                    <td>{{$playerAttribute->balance}}</td>
                                    <td>{{$playerAttribute->shot_power}}</td>
                                    <td>{{$playerAttribute->jumping}}</td>
                                    <td>{{$playerAttribute->stamina}}</td>
                                    <td>{{$playerAttribute->strength}}</td>
                                    <td>{{$playerAttribute->long_shots}}</td>
                                    <td>{{$playerAttribute->aggression}}</td>
                                    <td>{{$playerAttribute->interceptions}}</td>
                                    <td>{{$playerAttribute->positioning}}</td>
                                    <td>{{$playerAttribute->vision}}</td>
                                    <td>{{$playerAttribute->penalties}}</td>
                                    <td>{{$playerAttribute->marking}}</td>
                                    <td>{{$playerAttribute->standing_tackle}}</td>
                                    <td>{{$playerAttribute->sliding_tackle}}</td>
                                    <td>{{$playerAttribute->gk_diving}}</td>
                                    <td>{{$playerAttribute->gk_handling}}</td>
                                    <td>{{$playerAttribute->gk_kicking}}</td>
                                    <td>{{$playerAttribute->gk_positioning}}</td>
                                    <td>{{$playerAttribute->gk_reflexes}}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ URL::to('playerAttributes/' . $playerAttribute->id . '/edit') }}">
                                                <button type="button" class="btn btn-warning">Edit</button>
                                            </a>&nbsp;
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <form action="{{url('playerAttributes', [$playerAttribute->id])}}" method="POST">
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
                    {{ $playerAttributes->links() }}

            </div>
        </div>
    </div>
@endsection