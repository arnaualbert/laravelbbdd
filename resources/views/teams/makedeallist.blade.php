@extends('layout')

@section('content')
@if (empty($team))
    <p>No players to make deal</p>
@else
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Year Of Birth</th>
            <th scope="col">Salary</th>
            <th scope="col">Teams Id</th>
            <th scope="col">MAKE DEAL</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($player as $player)
        @if ($player->teams_id != $team->id )
        <tr>
            <td>{{ $player->id }}</td>
            <td>{{ $player->name }}</a></td>
            <td>{{ $player->surname }}</td>
            <td>{{ $player->yearofbirth }}</td>
            <td>{{ $player->salary }}€</td>
            <td>{{ $player->teams_id }}</td>
            <td><a href="/playershire/{{$player->id}}/{{$team->id}}">MAKE DEAL</a></td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
@endif
@endsection
