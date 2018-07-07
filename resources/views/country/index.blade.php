@extends('layouts.app')

@section('content')
    <br><br>
    <div class="container">
        <center><h1>COUNTRY</h1></center>
        <div class="row">
            <br class="col-md-10 col-md-offset-1">
                @if(Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif
                    {{link_to_route('country.create', 'Add New Country', null, ['class'=>'btn btn-primary'])}}
                    <br><br>

                <div class="panel panel-default">
                    <div class="panel-heading">Country</div>

                    <div class="panel-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID Country</th>
                                <th scope="col">Country Name</th>
                                <th scope="colspan=2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($countries as $country)
                            <tr>
                                <th scope="row">{{$country->id}}</th>
                                {{--<td><a href="/country/{{$country->id_negara}}">{{$country->kode_negara}}</a></td>--}}
                                <td>{{$country->name}}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ URL::to('country/' . $country->id . '/edit') }}">
                                            <button type="button" class="btn btn-warning">Edit</button>
                                        </a>&nbsp;
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <form action="{{url('country', [$country->id])}}" method="POST">
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