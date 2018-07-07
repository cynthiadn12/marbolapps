@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Update Team</div>

                    <div class="panel-body">
                        {!! Form::model($schedule, array('route'=>['schedule.update', $schedule->id], 'method'=>'PUT')) !!}
                        <div class="form-group">
                            {!! Form::label('league_id','League') !!}
                            {!! Form::select('league_id', \App\League::all()->pluck('name', 'id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose League...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('referee_id','Referee') !!}
                            {!! Form::select('league_id', \App\Referee::all()->pluck('referee_name', 'id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Referee...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('date','Match Date') !!}
                            {!! Form::text('date', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('month','Match Month') !!}
                            {!! Form::text('month', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('year','Match Year') !!}
                            {!! Form::text('year', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('hour','Match Hour') !!}
                            {!! Form::text('hour', null,['class' => 'form-control']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('minute','Match Minutes') !!}
                            {!! Form::text('minute', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('second','Match Second') !!}
                            {!! Form::text('second', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('season','Match Season') !!}
                            {!! Form::text('season', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_team_api_id','Match Home Team ID') !!}
                            {!! Form::select('home_team_api_id', \App\Team::all()->pluck('team_long_name', 'team_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Home Team ID...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_team_name','Match Home Team Name') !!}
                            {!! Form::select('home_team_name', \App\Team::all()->pluck('team_long_name', 'team_long_name')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Home Team Name...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_team_goal','Home Team Goal') !!}
                            {!! Form::text('home_team_goal', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_team_api_id','Match Away Team ID') !!}
                            {!! Form::select('away_team_api_id', \App\Team::all()->pluck('team_long_name', 'team_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Away Team ID...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_team_name','Match Away Team Name') !!}
                            {!! Form::select('away_team_name', \App\Team::all()->pluck('team_long_name', 'team_long_name')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Away Team Name...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_team_goal','Away Team Goal') !!}
                            {!! Form::text('away_team_goal', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('stadium','Stadium') !!}
                            {!! Form::text('stadium', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('status_final_time','Status Final Time') !!}
                            {!! Form::text('status_final_time', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('prediction_result','Prediction Result') !!}
                            {!! Form::text('prediction_result', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::button('Update',['type'=>'submit', 'class'=>'btn btn-primary']) !!}
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