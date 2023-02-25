@extends('layout')

@section('content')
    @if (empty($teams))
        <p>No teams in the league</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Coach</th>
                    <th scope="col">Category</th>
                    <th scope="col">Budget</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $team)
                    <tr>
                        <td>{{ $team->id }}</td>
                        <td><a href="/teams/{{$team->id}}">{{ $team->name }}</a></td>
                        <td>{{ $team->coach }}</td>
                        <td>{{ $team->category }}</td>
                        <td>{{ $team->budget }}€</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
        <a href="/teamsadd">NEW TEAM</a>
@endsection
