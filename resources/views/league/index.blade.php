@extends('layouts.app')

@section('content')
   <br><br>
    <div class="container">
        <center><h1>LEAGUE</h1></center>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if(Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif

                    {{link_to_route('league.create', 'Add New League', null, ['class'=>'btn btn-primary'])}}
                    <br><br>
                <div class="panel panel-default">
                    <div class="panel-heading">All League</div>
                    <div class="panel-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID League</th>
                                <th scope="col">ID Country</th>
                                <th scope="col">League Name</th>
                                <th scope="colspan=2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($league as $league)
                                <tr>
                                    <th scope="row">{{$league->id}}</th>
                                    <th scope="row">{{$league->country_id}}</th>
                                    {{--<td><a href="/country/{{$country->id_negara}}">{{$country->kode_negara}}</a></td>--}}
                                    <td>{{$league->name, [$league->id]}}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ URL::to('league/' . $league->id . '/edit') }}">
                                                <button type="button" class="btn btn-warning">Edit</button>
                                            </a>&nbsp;
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <form action="{{url('league', [$league->id])}}" method="POST">
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