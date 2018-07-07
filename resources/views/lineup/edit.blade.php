@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Ubah Lineup</div>

                    <div class="panel-body">
                        {!! Form::model($lineup, array('route'=>['lineup.update', $lineup->id], 'method'=>'PUT')) !!}

                        <div class="form-group">
                            {!! Form::label('schedule_id','Enter Schedule') !!}
                            {!! Form::select('schedule_id', \App\Schedule::all()->pluck('date', 'id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Schedule Date...']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('home_player_1','Enter Home Player 1') !!}
                            {!! Form::select('home_player_1', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('position_home_player1','Enter Posisi Home Player 1') !!}
                            {!! Form::text('position_home_player1', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_2','Enter Home Player 2') !!}
                            {!! Form::select('home_player_2', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('position_home_player2','Enter Posisi Home Player 2') !!}
                            {!! Form::text('position_home_player2', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_3','Enter Home Player 3') !!}
                            {!! Form::select('home_player_3', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('position_home_player3','Enter Posisi Home Player 3') !!}
                            {!! Form::text('position_home_player3', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_4','Enter Home Player 4') !!}
                            {!! Form::select('home_player_4', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('position_home_player4','Enter Posisi Home Player 4') !!}
                            {!! Form::text('position_home_player4', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_5','Enter Home Player 5') !!}
                            {!! Form::select('home_player_5', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('position_home_player5','Enter Posisi Home Player 5') !!}
                            {!! Form::text('position_home_player5', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_6','Enter Home Player 6') !!}
                            {!! Form::select('home_player_6', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('position_home_player6','Enter Posisi Home Player 6') !!}
                            {!! Form::text('position_home_player6', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_7','Enter Home Player 7') !!}
                            {!! Form::select('home_player_7', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('position_home_player7','Enter Posisi Home Player 7') !!}
                            {!! Form::text('position_home_player7', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_8','Enter Home Player 8') !!}
                            {!! Form::select('home_player_8', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('position_home_player8','Enter Posisi Home Player 8') !!}
                            {!! Form::text('position_home_player8', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_9','Enter Home Player 9') !!}
                            {!! Form::select('home_player_9', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('position_home_player9','Enter Posisi Home Player 9') !!}
                            {!! Form::text('position_home_player9', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_10','Enter Home Player 10') !!}
                            {!! Form::select('home_player_10', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('position_home_player10','Enter Posisi Home Player 10') !!}
                            {!! Form::text('position_home_player10', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_11','Enter Home Player 11') !!}
                            {!! Form::select('home_player_11', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('position_home_player11','Enter Posisi Home Player 11') !!}
                            {!! Form::text('position_home_player11', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_1','Enter Away Player 1') !!}
                            {!! Form::select('away_player_1', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('position_away_player1','Enter Posisi Away Player 1') !!}
                            {!! Form::text('position_away_player1', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_2','Enter Away Player 2') !!}
                            {!! Form::select('away_player_2', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('position_away_player2','Enter Posisi Away Player 2') !!}
                            {!! Form::text('position_away_player2', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_3','Enter Away Player 3') !!}
                            {!! Form::select('away_player_3', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('position_away_player3','Enter Posisi Away Player 3') !!}
                            {!! Form::text('position_away_player3', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_4','Enter Away Player 4') !!}
                            {!! Form::select('away_player_4', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('position_away_player4','Enter Posisi Away Player 4') !!}
                            {!! Form::text('position_away_player4', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_5','Enter Away Player 5') !!}
                            {!! Form::select('away_player_5', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('position_away_player5','Enter Posisi Away Player 5') !!}
                            {!! Form::text('position_away_player5', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_6','Enter Away Player 6') !!}
                            {!! Form::select('away_player_6', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('position_away_player6','Enter Posisi Away Player 6') !!}
                            {!! Form::text('position_away_player6', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_7','Enter Away Player 7') !!}
                            {!! Form::select('away_player_7', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('position_away_player7','Enter Posisi Away Player 7') !!}
                            {!! Form::text('position_away_player7', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_8','Enter Away Player 8') !!}
                            {!! Form::select('away_player_8', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('position_away_player8','Enter Posisi Away Player 8') !!}
                            {!! Form::text('position_away_player8', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_9','Enter Away Player 9') !!}
                            {!! Form::select('away_player_9', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('position_away_player9','Enter Posisi Away Player 9') !!}
                            {!! Form::text('position_away_player9', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_10','Enter Away Player 10') !!}
                            {!! Form::select('away_player_10', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('position_away_player10','Enter Posisi Away Player 10') !!}
                            {!! Form::text('position_away_player10', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_11','Enter Away Player 11') !!}
                            {!! Form::select('away_player_11', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('position_away_player11','Enter Posisi Away Player 11') !!}
                            {!! Form::text('position_away_player11', null,['class' => 'form-control']) !!}
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