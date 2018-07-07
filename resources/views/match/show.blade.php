@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading">{{$playerAttributes->date}}</div>
                    <div class="panel-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID Team</th>
                                <th scope="col">Team API ID</th>
                                <th scope="col">Team FIFA API ID</th>
                                <th scope="col">Team Long Name</th>
                                <th scope="col">Team Short Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Build Up Play Speed</th>
                                <th scope="col">Created At</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>

                                </tr>
                            </tbody>
                        </table>
                        {{--{{$team->team_short_name}} &nbsp&nbsp {{$team->created_at}};--}}
                        {{--'country_id', \App\Country::all()->pluck('name', 'id_country')->toArray()--}}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection