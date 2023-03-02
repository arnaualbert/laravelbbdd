{{-- is the list of all the teams --}}
@extends('layout')

@section('content')
    @if (empty($teams))
        <p>No teams in the league</p>
    @else
     <a class="btn btn-secondary" href="/teamsadd">NEW TEAM</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Coach</th>
                    <th scope="col">Category</th>
                    <th scope="col">Budget</th>
                    <th scope="col">Manage</th>
                    <th scope="col">DELETE</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $team)
                    <tr>
                        <td>{{ $team->id }}</td>
                        <td>{{ $team->name }}</a></td>
                        <td>{{ $team->coach }}</td>
                        <td>{{ $team->category }}</td>
                        <td>{{ $team->budget }}€</td>
                        <td><a class="btn btn-primary" href="/teams/{{$team->id}}">Manage Team</a></td>
                        <td><a class="btn btn-danger" href="/deleteteam/{{$team->id}}">Delete Team</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
