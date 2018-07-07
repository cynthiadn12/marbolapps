@extends('layouts.app')

@section('content')
    <br><br>
    <div class="container">
        <center><h1>TEAM</h1></center>
        <div class="row">
            <div class="col-md-12 ">
                @if(Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif
                    {{link_to_route('team.create', 'Add New Team', null, ['class'=>'btn btn-primary'])}}
                    <br><br>
                <div class="panel panel-default">
                    <div class="panel-heading">All Teams</div>
                    <div class="panel-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID Team</th>
                                <th scope="col">Team API ID</th>
                                <th scope="col">Team FIFA API ID</th>
                                <th scope="col">League ID</th>
                                <th scope="col">Team Long Name</th>
                                <th scope="col">Team Short Name</th>
                                <th scope="col">Team Logo</th>
                                <th scope="colspan=2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teams as $team)
                                <tr>
                                    <th scope="row">{{$team->id}}</th>
                                    <th scope="row">{{$team->team_api_id}}</th>
                                    <th scope="row">{{$team->team_fifa_api_id}}</th>
                                    <th scope="row">{{$team->league_id}}</th>
                                    {{--<td><a href="/country/{{$country->id_negara}}">{{$country->kode_negara}}</a></td>--}}
                                    <td>{{link_to_route('team.show', $team->team_long_name, [$team->id])}}</td>
                                    <td>{{$team->team_short_name}}</td>
                                    <th scope="row">{{$team->team_logo}}</th>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ URL::to('team/' . $team->id . '/edit') }}">
                                                <button type="button" class="btn btn-warning">Edit</button>
                                            </a>&nbsp;
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <form action="{{url('team', [$team->id])}}" method="POST">
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
                    {{ $teams->links() }}

            </div>
        </div>
    </div>
@endsection