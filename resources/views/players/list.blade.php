@extends('layout')

@section('content')
@if (empty($players))
    <p>No players in the league</p>
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
        </tr>
    </thead>
    <tbody>
        @foreach ($players as $player)
            <tr>
                <td>{{ $player->id }}</td>
                <td>{{ $player->name }}</a></td>
                <td>{{ $player->surname }}</td>
                <td>{{ $player->yearofbirth }}</td>
                <td>{{ $player->salary }}€</td>
                <td>{{ $player->teams_id }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection
