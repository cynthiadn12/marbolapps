@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Tambah Livescore</div>

                    <div class="panel-body">
                        {!! Form::open(array('route'=>'livescore.store')) !!}
                        <div class="form-group">
                            {!! Form::label('schedule_id','Enter Schedule') !!}
                            {!! Form::select('schedule_id', \App\Schedule::all()->pluck('date', 'id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Schedule...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('time','Enter Time') !!}
                            {!! Form::text('time', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player','Enter Home Player') !!}
                            {!! Form::select('home_player', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Home Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('do1','Enter Do 1') !!}
                            {!! Form::text('do1', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player','Enter Away Player') !!}
                            {!! Form::select('away_player', \App\Player::all()->pluck('player_name', 'player_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Away Player...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('do2','Enter Do 2') !!}
                            {!! Form::text('do2', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_score','Enter Home Score') !!}
                            {!! Form::text('home_score', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_score','Enter Away Score') !!}
                            {!! Form::text('away_score', null,['class' => 'form-control']) !!}
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