@extends('layouts.app')

@section('content')
    <br><br>
    <div class="container">
        <center><h1></h1></center>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><center>UPDATE PLAYER</center></div>

                    <div class="panel-body">
                        {!! Form::model($player, array('route'=>['player.update', $player->id], 'method'=>'PUT')) !!}
                        <div class="form-group">
                            {!! Form::label('player_api_id','Player API ID') !!}
                            {!! Form::text('player_api_id', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('player_fifa_api_id','Player FIFA API ID') !!}
                            {!! Form::text('player_fifa_api_id', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('team_api_id','Select The Team API ID') !!}
                            {!! Form::select('team_api_id', \App\Team::all()->pluck('team_long_name', 'team_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Team...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('player_name','Player Name') !!}
                            {!! Form::text('player_name', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('birthday','Entry Birthday') !!}
                            {!! Form::text('birthday', null,['class' => 'form-control']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('height','Entry Height') !!}
                            {!! Form::text('height', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('weight','Entry Weight') !!}
                            {!! Form::text('weight', null,['class' => 'form-control']) !!}
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