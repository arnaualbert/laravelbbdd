{{-- this view show the contract to the player --}}
@extends('layout')

@section('content')
    @if (empty($player))
        <p>No player found!</p>
    @else
        <form method="post" action="/signplayer/{{ $player->id }}">
            @csrf
            <div class="form-group">
                <input type="text" name="name" value="{{ $player->name }}" readonly>
                <p>Have reached an agrament to join: </p>
                <select name="team" class="form-select" >
                    @foreach ( $teams as $team )
                    <option value="{{$team->id}}">{{$team->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">HERE WE GO!</button>
            </div>
        </form>
    @endif
@endsection
