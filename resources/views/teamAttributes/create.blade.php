@extends('layouts.app')

@section('content')
    <br><br>
    <div class="container">
        <center><h1></h1></center>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><center>ADD NEW TEAM ATTRIBUTES</center></div>

                    <div class="panel-body">
                        {!! Form::open(array('route'=>'teamAttributes.store')) !!}
                        <div class="form-group">
                            {!! Form::label('team_api_id','Select The Team API ID') !!}
                            {!! Form::select('team_api_id', \App\Team::all()->pluck('team_long_name', 'team_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Team...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('team_fifa_api_id','Team FIFA API ID') !!}
                            {!! Form::text('team_fifa_api_id', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('date','Entry Date') !!}
                            {!! Form::text('date', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('buildUpPlaySpeed','Entry Build Up Play Speed') !!}
                            {!! Form::text('buildUpPlaySpeed', null,['class' => 'form-control']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('buildUpPlaySpeedClass','Entry Build Up Play Speed Class') !!}
                            {!! Form::text('buildUpPlaySpeedClass', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('buildUpPlayDribbling','Entry Build Up Play Dribbling') !!}
                            {!! Form::text('buildUpPlayDribbling', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('buildUpPlayDribblingClass','Entry Build Up Play Dribbling Class') !!}
                            {!! Form::text('buildUpPlayDribblingClass', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('buildUpPlayPassing','Entry Build Up Play Passing') !!}
                            {!! Form::text('buildUpPlayPassing', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('buildUpPlayPassingClass','Entry Build Up Play Passing Class') !!}
                            {!! Form::text('buildUpPlayPassingClass', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('buildUpPlayPositioningClass','Entry Build Up Play Positioning Class') !!}
                            {!! Form::text('buildUpPlayPositioningClass', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('chanceCreationPassing','Entry Chance Creation Passing') !!}
                            {!! Form::text('chanceCreationPassing', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('chanceCreationPassingClass','Entry Chance Creation Passing Class') !!}
                            {!! Form::text('chanceCreationPassingClass', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('chanceCreationCrossing','Entry Chance Creation Crossing') !!}
                            {!! Form::text('chanceCreationCrossing', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('chanceCreationCrossingClass','Entry Chance Creation Crossing Class') !!}
                            {!! Form::text('chanceCreationCrossingClass', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('chanceCreationShooting','Entry Chance Creation Shooting') !!}
                            {!! Form::text('chanceCreationShooting', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('chanceCreationShootingClass','Entry Chance Creation Shooting Class') !!}
                            {!! Form::text('chanceCreationShootingClass', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('chanceCreationPositioningClass','Entry Chance Creation Positioning Class') !!}
                            {!! Form::text('chanceCreationPositioningClass', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('defencePressure','Entry Defence Pressure') !!}
                            {!! Form::text('defencePressure', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('defencePressureClass','Entry Defence Pressure Class') !!}
                            {!! Form::text('defencePressureClass', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('defenceAggression','Entry Defence Aggression') !!}
                            {!! Form::text('defenceAggression', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('defenceAggressionClass','Entry Defence Aggression Class') !!}
                            {!! Form::text('defenceAggressionClass', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('defenceTeamWidth','Entry Defence Team Width') !!}
                            {!! Form::text('defenceTeamWidth', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('defenceTeamWidthClass','Entry Defence Team Width Class') !!}
                            {!! Form::text('defenceTeamWidthClass', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('defenceDefenderLineClass','Entry Defence Defender Line Class') !!}
                            {!! Form::text('defenceDefenderLineClass', null,['class' => 'form-control']) !!}
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