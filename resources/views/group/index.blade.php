@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if(Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">All Group</div>
                    <div class="panel-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID Group</th>
                                <th scope="col">ID League</th>
                                <th scope="col">Group Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Created At</th>
                                <th scope="colspan=2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($groups as $group)
                            <tr>
                                <th scope="row">{{$group->id_group}}</th>
                                <th scope="row">{{$group->league_id}}</th>
                                {{--<td><a href="/country/{{$country->id_negara}}">{{$country->kode_negara}}</a></td>--}}
                                <td>{{$group->group_name, [$group->id_group]}}</td>
                                <td>{{$group->date}}</td>
                                <td>{{$group->created_at}}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ URL::to('group/' . $group->id_group. '/edit') }}">
                                            <button type="button" class="btn btn-warning">Edit</button>
                                        </a>&nbsp;
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <form action="{{url('group', [$group->id_group])}}" method="POST">
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
                {{link_to_route('group.create', 'Add New Grup', null, ['class'=>'btn btn-primary'])}}
            </div>
        </div>
    </div>
@endsection