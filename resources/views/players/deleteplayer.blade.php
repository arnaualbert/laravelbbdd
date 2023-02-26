@extends('layout')
@section('content')
    @if ($player->teams_id == '')
    <h1> DELETE {{ $player->name }}</h1>
    <form method="post" action="/deleteplayer/{{ $player->id }}">
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
            <input type="text" name="idplayer" value="{{ $player->id }}">
            <p>CLICKING THE BUTTON THIS PLAYER WILL DISAPEAR</p>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-danger">DELETE</button>
        </div>
    </form>
    @else
    <p>THIS PLAYER IS IN A TEAM , FIRE THE PLAYER FIRST AND THEN DELETE THE PLAYER</p>
    @endif
@endsection
