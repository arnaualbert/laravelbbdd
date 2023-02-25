@extends('layout')

@section('content')
    @if (empty($player))
        <p>No team or player found!</p>
    @else
        <h1> FIRE {{ $player->name }} FROM {{ $team->name }}</h1>
        <form method="post" action="/fire/{{ $player->id }}">
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
                <input type="text" name="fire" value="">
                <p> {{$team->name}} has decided to terminate the contract of {{$player->name}} with a salary of {{$player->salary}}€ born on {{$player->yearofbirth}}</p>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-danger">FIRE</button>
            </div>
        </form>
    @endif
@endsection
