@extends('layouts.app')

@section('content')
    <br><br>
    <div class="container">
        <center><h1></h1></center>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><center>ADD NEW TEAM</center></div>

                    <div class="panel-body">
                        {!! Form::open(array('route'=>'team.store')) !!}
                        <div class="form-group">
                            {!! Form::label('team_api_id','Team API ID') !!}
                            {!! Form::text('team_api_id', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('team_fifa_api_id','Team FIFA API ID') !!}
                            {!! Form::text('team_fifa_api_id', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('league_id','League of Team') !!}
                            {!! Form::select('league_id', \App\League::all()->pluck('name', 'id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose League...']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('team_long_name','Entry Long Name') !!}
                            {!! Form::text('team_long_name', null,['class' => 'form-control']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('team_short_name','Entry Short Name') !!}
                            {!! Form::text('team_short_name', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('team_logo','Entry Team Logo') !!}
                            {!! Form::text('team_logo', null,['class' => 'form-control']) !!}
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