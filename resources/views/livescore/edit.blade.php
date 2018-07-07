@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Ubah Livescore</div>

                    <div class="panel-body">
                        {!! Form::model($livescore, array('route'=>['livescore.update', $livescore->id], 'method'=>'PUT')) !!}
                        <div class="form-group">
                            {!! Form::label('schedule_id','Enter Jadwal Pertandingan') !!}
                            {!! Form::text('schedule_id', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('time','Enter Waktu') !!}
                            {!! Form::text('time', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_player','Enter Home Pemain') !!}
                            {!! Form::text('home_player', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('do1','Enter Do 1') !!}
                            {!! Form::text('do1', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_player','Enter Away Pemain') !!}
                            {!! Form::text('away_player', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('do2','Enter Do 2') !!}
                            {!! Form::text('do2', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('home_score','Enter Home Skor') !!}
                            {!! Form::text('home_score', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('away_score','Enter Away Skor') !!}
                            {!! Form::text('away_score', null,['class' => 'form-control']) !!}
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