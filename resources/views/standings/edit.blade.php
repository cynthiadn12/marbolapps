@extends('layouts.app')

@section('content')
<br><br>
    <div class="container">
        <center><h1></h1></center>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><center>UPDATE STANDING</center></div>

                    <div class="panel-body">
                        {!! Form::model($standing, array('route'=>['standings.update', $standing->id], 'method'=>'PUT')) !!}
                        <div class="form-group">
                            {!! Form::label('team_api_id','Enter Team API ID') !!}
                            {!! Form::select('team_api_id', \App\Team::all()->pluck('team_long_name', 'team_api_id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Team for API ID...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('team_name','Enter Team Name') !!}
                            {!! Form::select('team_name', \App\Team::all()->pluck('team_long_name', 'team_long_name')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Team for Name...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('match_play','Enter Match Play') !!}
                            {!! Form::text('match_play', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('win','Enter Win') !!}
                            {!! Form::text('win', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('draw','Enter Draw') !!}
                            {!! Form::text('draw', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('lose','Enter Lose') !!}
                            {!! Form::text('lose', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('points','Enter Points') !!}
                            {!! Form::text('points', null,['class' => 'form-control']) !!}
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