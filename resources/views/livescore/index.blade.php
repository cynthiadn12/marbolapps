@extends('layouts.app')

@section('content')
    <br><br>
    <div class="container">
        <center><h1>LIVESCORE</h1></center>
        <div class="row">
            <div class="col-md-12 ">
                @if(Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif
                    {{link_to_route('livescore.create', 'Add New Livescore', null, ['class'=>'btn btn-primary'])}}
                    <br><br>
                <div class="panel panel-default">
                    <div class="panel-heading">Livescore</div>
                    <div class="panel-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Livescore ID</th>
                                <th scope="col">Schedule</th>
                                <th scope="col">Time</th>
                                <th scope="col">Home Player</th>
                                <th scope="col">Do1</th>
                                <th scope="col">Away Player</th>
                                <th scope="col">Do 2</th>
                                <th scope="col">Home Score</th>
                                <th scope="col">Away Score</th>
                                <th scope="colspan=2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($livescores as $livescore)
                                <tr>
                                    {{--<td><a href="/country/{{$country->id_negara}}">{{$country->kode_negara}}</a></td>--}}
                                    <td>{{link_to_route('livescore.show', $livescore->id, [$livescore->id])}}</td>
                                    <td>{{$livescore->schedule_id}}</td>
                                    <td>{{$livescore->time}}</td>
                                    <td>{{$livescore->home_player}}</td>
                                    <td>{{$livescore->do1}}</td>
                                    <td>{{$livescore->away_player}}</td>
                                    <td>{{$livescore->do2}}</td>
                                    <td>{{$livescore->home_score}}</td>
                                    <td>{{$livescore->away_score}}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ URL::to('livescore/' . $livescore->id . '/edit') }}">
                                                <button type="button" class="btn btn-warning">Edit</button>
                                            </a>&nbsp;
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <form action="{{url('livescore', [$livescore->id])}}" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="btn btn-danger" value="Delete"/>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection