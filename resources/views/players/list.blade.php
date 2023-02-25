@extends('layout')

@section('content')
@if (empty($players))
<a href="/playersadd">ADD PLAYER</a>
    <p>No players in the league</p>
@else
<a href="/playersadd">ADD PLAYER</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">DELETE</th>
            <th scope="col">SIGN FOR A TEAM</th>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Year Of Birth</th>
            <th scope="col">Salary</th>
            <th scope="col">Teams Id</th>
            <th scope="col">Current Team</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($players as $player)
            <tr>
                <td><a href="/deleteplayer/{{$player->id}}">Delete Player</a></td>
                <td><a href="/playerscontract/{{$player->id}}">SIGN FOR A TEAM</a></td>
                <td>{{ $player->id }}</td>
                <td>{{ $player->name }}</a></td>
                <td>{{ $player->surname }}</td>
                <td>{{ $player->yearofbirth }}</td>
                <td>{{ $player->salary }}€</td>
                <td>{{ $player->teams_id }}</td>
                @foreach ( $teams as $teamofplayer )
                @if($player->teams_id == $teamofplayer->id)
                <td>{{ $teamofplayer->name }}</td>
                @else
                <p> </p>
                @endif
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection
