@extends('layout')

@section('content')

@if (empty($team))
<p>No team found!</p>
@else
<h1>{{$team->name}}</h1>
<p>Coach: {{$team->coach}}</p>
<p>Category: {{$team->category}}</p>
<p>Budget: {{$team->budget}}</p>
<a href="/teams/form/{{$team->id}}">EDIT</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">yearofbirth</th>
            <th scope="col">salary</th>
        </tr>
    </thead>
    <tbody>
@foreach ($team->players as $player )
<tr>
    <td>{{$player->name}}</td>
    <td>{{$player->surname}}</td>
    <td>{{$player->yearofbirth}}</td>
    <td>{{$player->salary}}</td>
</tr>
@endforeach
</tbody>
</table>
@endif
@endsection
