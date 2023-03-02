{{-- this is the view to edit the player --}}
@extends('layout')

@section('content')
    @if (empty($player))
        <p>No player found!</p>
    @else
        <h1> Edit {{ $player->name }} {{$player->surname}}</h1>
        <form method="post" action="/players/{{ $player->id }}">
            @csrf
            <div class="form-group">
                <label for="">Id</label>
                <input type="text" name="id" value="{{ $player->id }}" class="form-control" readonly>
                <label for="">Name</label>
                <input type="text" name="name" value="{{ $player->name }}" class="form-control">
                <label for="">Surname</label>
                <input type="text" name="surname" value="{{ $player->surname }}" class="form-control">
                <label for="">Year of Birth</label>
                <input type="number" name="yearofbirth" value="{{ $player->yearofbirth }}" class="form-control">
                <label for="">Salary</label>
                <input type="number" step="0.01" name="salary" value="{{ $player->salary }}" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-secondary">Update Player</button>
            </div>
        </form>
    @endif
@endsection
