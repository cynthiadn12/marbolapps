@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Group</div>

                    <div class="panel-body">
                        {!! Form::open(array('route'=>'group.store')) !!}
                        <div class="form-group">
                            {!! Form::label('league_id','Choose The League') !!}
                            {!! Form::select('league_id', \App\League::all()->pluck('league_name', 'id_league')->toArray(), null,['class'=>'select2 form-control', 'placeholder' => 'Choose League...']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('group_name','Entry Group Name') !!}
                            {!! Form::text('group_name', null,['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('date','Entry The Date') !!}
                            {!! Form::text('date', null,['class' => 'form-control']) !!}
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