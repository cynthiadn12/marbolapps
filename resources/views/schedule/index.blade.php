@extends('layouts.app')

@section('content')
    <br><br>
    <div class="container">
        <center><h1>SCHEDULE</h1></center>
        <div class="row">
            <div class="col-md-12 ">
                @if(Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif
                    {{link_to_route('schedule.create', 'Add New Match Schedule', null, ['class'=>'btn btn-primary'])}}
                    <br><br>
                <div class="panel panel-default" style="width: 2000px">
                    <div class="panel-heading">All Schedule</div>
                    <div class="panel-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Schedule ID</th>
                                <th scope="col">League ID</th>
                                <th scope="col">Referee ID</th>
                                <th scope="col">Match Date</th>
                                <th scope="col">Match Month</th>
                                <th scope="col">Match Year</th>
                                <th scope="col">Match Hour</th>
                                <th scope="col">Match Minute</th>
                                <th scope="col">Match Second</th>
                                <th scope="col">Match Season</th>
                                <th scope="col">Home Team API ID</th>
                                <th scope="col">Home Team Name</th>
                                <th scope="col">Home Team Goal</th>
                                <th scope="col">Away Team API ID</th>
                                <th scope="col">Away Team Name</th>
                                <th scope="col">Away Team Goal</th>
                                <th scope="col">Stadium</th>
                                <th scope="col">Status Final Time</th>
                                <th scope="col">Prediction Result</th>
                                <th scope="colspan=2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($schedules as $schedule)
                                <tr>
                                    <th scope="row">{{$schedule->id}}</th>
                                    <th scope="row">{{$schedule->league_id}}</th>
                                    <th scope="row">{{$schedule->referee_id}}</th>
                                    <th scope="row">{{$schedule->date}}</th>
                                    <th scope="row">{{$schedule->month}}</th>
                                    <th scope="row">{{$schedule->year}}</th>
                                    {{--<td><a href="/country/{{$country->id_negara}}">{{$country->kode_negara}}</a></td>--}}
                                    <td>{{$schedule->hour}}</td>
                                    <td>{{$schedule->minute}}</td>
                                    <td>{{$schedule->second}}</td>
                                    <td>{{$schedule->season}}</td>
                                    <td>{{$schedule->home_team_api_id}}</td>
                                    <td>{{$schedule->home_team_name}}</td>
                                    <td>{{$schedule->home_team_goal}}</td>
                                    <td>{{$schedule->away_team_api_id}}</td>
                                    <td>{{$schedule->away_team_name}}</td>
                                    <td>{{$schedule->away_team_goal}}</td>
                                    <td>{{$schedule->stadium}}</td>
                                    <td>{{$schedule->status_final_time}}</td>
                                    <td>{{$schedule->prediction_result}}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ URL::to('schedule/' . $schedule->id . '/edit') }}">
                                                <button type="button" class="btn btn-warning">Edit</button>
                                            </a>&nbsp;
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <form action="{{url('schedule', [$schedule->id])}}" method="POST">
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
                    {{--{{ $players->links() }}--}}

            </div>
        </div>
    </div>
@endsection