{{-- is the delete team form --}}
@extends('layout')
@section('content')
    @if (count($team->players) == 0)
    <h1> DELETE {{ $team->name }}</h1>
    <form method="post" action="/delete/{{ $team->id }}">
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
            <input type="text" name="idteam" value="{{ $team->id }}">
            <p>CLICKING THE BUTTON THIS TEAM WILL DISAPEAR</p>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-danger">DELETE</button>
        </div>
    </form>
    @else
    <p>THIS TEAM HAVE PLAYERS, FIRE THE PLAYERS FIRST AND THEN DELETE THE TEAM</p>
    @endif
@endsection
