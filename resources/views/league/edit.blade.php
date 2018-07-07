@extends('layouts.app')

@section('content')
    <br><br>
    <div class="container">
        <center><h1></h1></center>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><center>UPDATE LEAGUE</center></div>

                    <div class="panel-body">
                        {!! Form::model($league, array('route'=>['league.update', $league->id], 'method'=>'PUT')) !!}
                        <div class="form-group">
                            {!! Form::label('country_id','Choose The Country') !!}
                            {!! Form::select('country_id', \App\Country::all()->pluck('name', 'id')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose Country...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('name','Entry League Name') !!}
                            {!! Form::text('name', null,['class' => 'form-control']) !!}
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