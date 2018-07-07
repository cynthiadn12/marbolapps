@extends('layouts.app')

@section('content')
    <br><br>
    <div class="container">
        <center><h1></h1></center>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><center>ADD NEW PLAYER ATTRIBUTES</center></div>

                    <div class="panel-body">
                        {!! Form::open(array('route'=>'playerAttributes.store')) !!}
                        <div class="form-group">
                            {!! Form::label('player_api_id','Select The Player API ID') !!}
                            {!! Form::select('player_api_id', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Player for API ID...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('player_fifa_api_id','Player FIFA API ID') !!}
                            {!! Form::text('player_fifa_api_id', null,['class' => 'form-control']) !!}
                        </div>

                        {{--<div class="form-group">--}}
                            {{--{{Form::label('player_fifa_api_id','Department ')}}--}}
                            {{--{{csrf_field()}}--}}
                            {{--<select name="player_fifa_api_id" class="form-control" id=>'player_fifa_api_id'>--}}
                                {{--<option value=" ">----Select Department-----</option>--}}
                                {{--@foreach($player_fifa_api_id as $value)--}}
                                {{--<option value="{{$value->player_api_id}}">{{$value->player_fifa_api_id}}</option>--}}
                                {{--@endforeach--}}
                            {{--</select>--}}
                        {{--</div>--}}

                        <div class="form-group">
                            {!! Form::label('date','Date') !!}
                            {!! Form::text('date', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('overall_rating','Overall Rating') !!}
                            {!! Form::text('overall_rating', null,['class' => 'form-control']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('potential','Entry Player Potential') !!}
                            {!! Form::text('potential', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('preferred_foot','Entry Player Preferred Foot') !!}
                            {!! Form::text('preferred_foot', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('attacking_work_rate','Entry Player Attacking Work Rate') !!}
                            {!! Form::text('attacking_work_rate', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('defensive_work_rate','Entry Player Defensive Work Rate') !!}
                            {!! Form::text('defensive_work_rate', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('crossing','Entry Player Crossing') !!}
                            {!! Form::text('crossing', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('finishing','Entry Player Finishing') !!}
                            {!! Form::text('finishing', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('heading_accuracy','Entry Player Heading Accuracy') !!}
                            {!! Form::text('heading_accuracy', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('short_passing','Entry Player Short Passing') !!}
                            {!! Form::text('short_passing', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('volleys','Entry Player Volleys') !!}
                            {!! Form::text('volleys', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('dribbling','Entry Player Dribbling') !!}
                            {!! Form::text('dribbling', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('curve','Entry Player Curve') !!}
                            {!! Form::text('curve', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('free_kick_accuracy','Entry Player Free Kick Accuracy') !!}
                            {!! Form::text('free_kick_accuracy', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('long_passing','Entry Player Long Passing') !!}
                            {!! Form::text('long_passing', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('ball_control','Entry Player Ball Control') !!}
                            {!! Form::text('ball_control', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('acceleration','Entry Player Acceleration') !!}
                            {!! Form::text('acceleration', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('sprint_speed','Entry Sprint Speed') !!}
                            {!! Form::text('sprint_speed', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('agility','Entry Player Agility') !!}
                            {!! Form::text('agility', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('reactions','Entry Player Reactions') !!}
                            {!! Form::text('reactions', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('balance','Entry Player Balance') !!}
                            {!! Form::text('balance', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('shot_power','Entry Player Shot Power') !!}
                            {!! Form::text('shot_power', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('jumping','Entry Player Jumping') !!}
                            {!! Form::text('jumping', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('stamina','Entry Player Stamina') !!}
                            {!! Form::text('stamina', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('strength','Entry Player Strength') !!}
                            {!! Form::text('strength', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('long_shots','Entry Player Long Shots') !!}
                            {!! Form::text('long_shots', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('aggression','Entry Player Aggresion') !!}
                            {!! Form::text('aggression', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('interceptions','Entry Player Interceptions') !!}
                            {!! Form::text('interceptions', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('positioning','Entry Player Positioning') !!}
                            {!! Form::text('positioning', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('vision','Entry Player Vision') !!}
                            {!! Form::text('vision', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('penalties','Entry Player Penalties') !!}
                            {!! Form::text('penalties', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('marking','Entry Player Marking') !!}
                            {!! Form::text('marking', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('standing_tackle','Entry Player Stading Tackle') !!}
                            {!! Form::text('standing_tackle', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('sliding_tackle','Entry Player Sliding Tackle') !!}
                            {!! Form::text('sliding_tackle', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('gk_diving','Entry Player GK Diving') !!}
                            {!! Form::text('gk_diving', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('gk_handling','Entry Player GK Handling') !!}
                            {!! Form::text('gk_handling', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('gk_kicking','Entry Player GK Kicking') !!}
                            {!! Form::text('gk_kicking', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('gk_positioning','Entry Player GK Positioning') !!}
                            {!! Form::text('gk_positioning', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('gk_reflexes','Entry Player GK Reflexes') !!}
                            {!! Form::text('gk_reflexes', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::button('Create',['type'=>'submit', 'class'=>'btn btn-primary']) !!}
                        </div>


                        {!! Form::close() !!}
                    </div>
                </div>

                @if(count( $errors ) > 0)
                    <ul class="aler alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection