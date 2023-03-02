{{-- is the info of the team --}}
@extends('layout')

@section('content')

@if (empty($team))
<p>No team found!</p>
@else
<h1>{{$team->name}}</h1>
<p>Coach: {{$team->coach}}</p>
<p>Category: {{$team->category}}</p>
<p>Budget: {{$team->budget}}</p>
<a class="btn btn-primary" href="/teams/form/{{$team->id}}">EDIT</a>
<a class="btn btn-success" href="/makedeallist/{{$team->id}}">SIGN PLAYER</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">yearofbirth</th>
            <th scope="col">salary</th>
            <th scope="col">END CONTRACT</th>
        </tr>
    </thead>
    <tbody>
@foreach ($team->players as $player)
<tr>
    <td>{{$player->name}}</td>
    <td>{{$player->surname}}</td>
    <td>{{$player->yearofbirth}}</td>
    <td>{{$player->salary}}€</td>
    {{-- <td><a href="/playersfire/{{$player->id}}">FIRE</a></td> --}}
    <td><a class="btn btn-danger" href="/playersfire/{{$player->id}}/{{$team->id}}">FIRE</a></td>
</tr>
@endforeach
</tbody>
</table>
@endif
@endsection
