@extends('layouts.app')

@section('content')
    <br><br>
    <div class="container">
        <center><h1></h1></center>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><center>UPDATE MATCH</center></div>

                    <div class="panel-body">
                        {!! Form::model($match, array('route'=>['match.update', $match->id], 'method'=>'PUT')) !!}
                        <div class="form-group">
                            {!! Form::label('country_id','Country ID') !!}
                            {!! Form::text('country_id', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('league_id','League ID') !!}
                            {!! Form::text('league_id', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('season','Season') !!}
                            {!! Form::text('season', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('stage','Stage') !!}
                            {!! Form::text('stage', null,['class' => 'form-control']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('Date','Entry Date') !!}
                            {!! Form::text('Date', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('match_api_id','Entry Match API ID') !!}
                            {!! Form::text('match_api_id', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_team_api_id','Entry Home Team API ID') !!}
                            {!! Form::text('home_team_api_id', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_team_api_id','Entry Away Team PI ID') !!}
                            {!! Form::text('away_team_api_id', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_X1','Entry Home Player X1') !!}
                            {!! Form::text('home_player_X1', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_X2','Entry Home Player X2') !!}
                            {!! Form::text('home_player_X2', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_X3','Entry Home Player X3') !!}
                            {!! Form::text('home_player_X3', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_X4','Entry Home Player X4') !!}
                            {!! Form::text('home_player_X4', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_X5','Entry Home Player X5') !!}
                            {!! Form::text('home_player_X5', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_X6','Entry Home Player X6') !!}
                            {!! Form::text('home_player_X6', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_X7','Entry Home Player X7') !!}
                            {!! Form::text('home_player_X7', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_X8','Entry Home Player X8') !!}
                            {!! Form::text('home_player_X8', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_X9','Entry Home Player X9') !!}
                            {!! Form::text('home_player_X9', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_X10','Entry Home Player X10') !!}
                            {!! Form::text('home_player_X10', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_X11','Entry Home Player X11') !!}
                            {!! Form::text('home_player_X11', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_X1','Entry Away Player X1') !!}
                            {!! Form::text('away_player_X1', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_X2','Entry Away Player X2') !!}
                            {!! Form::text('away_player_X2', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_X3','Entry Away Player X3') !!}
                            {!! Form::text('away_player_X3', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_X4','Entry Away Player X4') !!}
                            {!! Form::text('away_player_X4', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_X5','Entry Away Player X5') !!}
                            {!! Form::text('away_player_X5', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_X6','Entry Away Player X6') !!}
                            {!! Form::text('away_player_X6', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_X7','Entry Away Player X7') !!}
                            {!! Form::text('away_player_X7', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_X8','Entry Away Player X8') !!}
                            {!! Form::text('away_player_X8', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_X9','Entry Away Player X9') !!}
                            {!! Form::text('away_player_X9', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_X10','Entry Away Player X10') !!}
                            {!! Form::text('away_player_X10', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_X11','Entry Away Player X11') !!}
                            {!! Form::text('away_player_X11', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_Y1','Entry Home Player Y1') !!}
                            {!! Form::text('home_player_Y1', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_Y2','Entry Home Player Y2') !!}
                            {!! Form::text('home_player_Y2', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_Y3','Entry Home Player Y3') !!}
                            {!! Form::text('home_player_Y3', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_Y4','Entry Home Player Y4') !!}
                            {!! Form::text('home_player_Y4', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_Y5','Entry Home Player Y5') !!}
                            {!! Form::text('home_player_Y5', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_Y6','Entry Home Player Y6') !!}
                            {!! Form::text('home_player_Y6', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_Y7','Entry Home Player Y7') !!}
                            {!! Form::text('home_player_Y7', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_Y8','Entry Home Player Y8') !!}
                            {!! Form::text('home_player_Y8', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_Y9','Entry Home Player Y9') !!}
                            {!! Form::text('home_player_Y9', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_Y10','Entry Home Player Y10') !!}
                            {!! Form::text('home_player_Y10', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_Y11','Entry Home Player Y11') !!}
                            {!! Form::text('home_player_Y11', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_Y1','Entry Home Player Y1') !!}
                            {!! Form::text('away_player_Y1', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_Y2','Entry Home Player Y2') !!}
                            {!! Form::text('away_player_Y2', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_Y3','Entry Home Player Y3') !!}
                            {!! Form::text('away_player_Y3', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_Y4','Entry Home Player Y4') !!}
                            {!! Form::text('away_player_Y4', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_Y5','Entry Home Player Y5') !!}
                            {!! Form::text('away_player_Y5', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_Y6','Entry Home Player Y6') !!}
                            {!! Form::text('away_player_Y6', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_Y7','Entry Home Player Y7') !!}
                            {!! Form::text('away_player_Y7', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_Y8','Entry Home Player Y8') !!}
                            {!! Form::text('away_player_Y8', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_Y9','Entry Home Player Y9') !!}
                            {!! Form::text('away_player_Y9', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_Y10','Entry Home Player Y10') !!}
                            {!! Form::text('away_player_Y10', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_Y11','Entry Home Player Y11') !!}
                            {!! Form::text('away_player_Y11', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_1','Entry Home Player 1') !!}
                            {!! Form::text('home_player_1', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_2','Entry Home Player 2') !!}
                            {!! Form::text('home_player_2', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_3','Entry Home Player 3') !!}
                            {!! Form::text('home_player_3', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_4','Entry Home Player 4') !!}
                            {!! Form::text('home_player_4', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_5','Entry Home Player 5') !!}
                            {!! Form::text('home_player_5', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_6','Entry Home Player 6') !!}
                            {!! Form::text('home_player_6', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_7','Entry Home Player 7') !!}
                            {!! Form::text('home_player_7', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_8','Entry Home Player 8') !!}
                            {!! Form::text('home_player_8', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_9','Entry Home Player 9') !!}
                            {!! Form::text('home_player_9', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_10','Entry Home Player 10') !!}
                            {!! Form::text('home_player_10', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player_11','Entry Home Player 11') !!}
                            {!! Form::text('home_player_11', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_1','Entry Home Player 1') !!}
                            {!! Form::text('away_player_1', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_2','Entry Home Player 2') !!}
                            {!! Form::text('away_player_2', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_3','Entry Home Player 3') !!}
                            {!! Form::text('away_player_3', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_4','Entry Home Player 4') !!}
                            {!! Form::text('away_player_4', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_5','Entry Home Player 5') !!}
                            {!! Form::text('away_player_5', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_6','Entry Home Player 6') !!}
                            {!! Form::text('away_player_6', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_7','Entry Home Player 7') !!}
                            {!! Form::text('away_player_7', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_8','Entry Home Player 8') !!}
                            {!! Form::text('away_player_8', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_9','Entry Home Player 9') !!}
                            {!! Form::text('away_player_9', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_10','Entry Home Player 10') !!}
                            {!! Form::text('away_player_10', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player_11','Entry Home Player 11') !!}
                            {!! Form::text('away_player_11', null,['class' => 'form-control']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('goal','Entry Player Goal') !!}
                            {!! Form::text('goal', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('shoton','Entry Player Shot On') !!}
                            {!! Form::text('shoton', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('shotoff','Entry Shot Off') !!}
                            {!! Form::text('shotoff', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('foulcommit','Entry Foul Commit') !!}
                            {!! Form::text('foulcommit', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('card','Entry Card') !!}
                            {!! Form::text('card', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('cross','Entry Cross') !!}
                            {!! Form::text('cross', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('corner','Entry Corner') !!}
                            {!! Form::text('corner', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('possession','Entry Possession') !!}
                            {!! Form::text('possession', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('B365H','Entry B365H') !!}
                            {!! Form::text('B365H', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('B365D','Entry B365D') !!}
                            {!! Form::text('B365D', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('B365A','Entry B365A') !!}
                            {!! Form::text('B365A', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('BWH','Entry BWH') !!}
                            {!! Form::text('BWH', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('BWD','Entry BWD') !!}
                            {!! Form::text('BWD', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('BWA','Entry BWA') !!}
                            {!! Form::text('BWA', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('IWH','Entry IWH') !!}
                            {!! Form::text('IWH', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('IWD','Entry IWD') !!}
                            {!! Form::text('IWD', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('IWA','Entry IWA') !!}
                            {!! Form::text('IWA', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('LBH','Enty LBH') !!}
                            {!! Form::text('LBH', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('LBD','Entry LBD') !!}
                            {!! Form::text('LBD', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('LBA','Entry LBA') !!}
                            {!! Form::text('LBA', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('PSH','Entry PSH') !!}
                            {!! Form::text('PSH', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('PSD','Entry PSD') !!}
                            {!! Form::text('PSD', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('PSA','Entry PSA') !!}
                            {!! Form::text('PSA', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('WHH','Entry WHH') !!}
                            {!! Form::text('WHH', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('WHD','Entry WHD') !!}
                            {!! Form::text('WHD', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('WHA','Entry WHA') !!}
                            {!! Form::text('WHA', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('SJH','Entry SJH') !!}
                            {!! Form::text('SJH', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('SJD','Entry SJD') !!}
                            {!! Form::text('SJD', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('SJA','Entry SJA') !!}
                            {!! Form::text('SJA', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('VCH','Entry VCH') !!}
                            {!! Form::text('VCH', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('VCD','Entry VCD') !!}
                            {!! Form::text('VCD', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('VCA','Entry VCD') !!}
                            {!! Form::text('VCA', null,['class' => 'form-control']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('GBH','Entry GBH') !!}
                            {!! Form::text('GBH', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('GBD','Entry GBD') !!}
                            {!! Form::text('GBD', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('GBA','Entry GBD') !!}
                            {!! Form::text('GBA', null,['class' => 'form-control']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('BSH','Entry BSH') !!}
                            {!! Form::text('BSH', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('BSD','Entry BSD') !!}
                            {!! Form::text('BSD', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('BSA','Entry BSD') !!}
                            {!! Form::text('BSA', null,['class' => 'form-control']) !!}
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