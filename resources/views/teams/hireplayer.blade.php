@extends('layout')

@section('content')
    @if (empty($player))
        <p>No team or player found!</p>
    @else
        <h1> SIGN {{ $player->name }} FOR {{ $team->name }}</h1>
        <form method="post" action="/hire/{{ $player->id }}">
            @csrf
            <style>
                input {
                  display: none;
                }
                a {
                  color: Black;
               }
              </style>
            <div class="form-group">
                <input type="text" name="name" value="{{ $player->name }}">
                <input type="text" name="hire" value="{{$team->id}}">
                <p> {{$team->name}} has decided to sign {{$player->name}} with a salary of {{$player->salary}}€ born on {{$player->yearofbirth}}</p>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">HERE WE GO!</button>
            </div>
        </form>
    @endif
@endsection
