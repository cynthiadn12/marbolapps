@extends('layouts.app')

@section('content')
    <br><br>
    <div class="container">
        <center><h1></h1></center>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><center>ADD NEW COUNTRY</center></div>

                    <div class="panel-body">
                        {!! Form::open(array('route'=>'country.store')) !!}
                        <div class="form-group">
                            {!! Form::label('name','Country Name') !!}
                            {!! Form::text('name', null,['class' => 'form-control']) !!}
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