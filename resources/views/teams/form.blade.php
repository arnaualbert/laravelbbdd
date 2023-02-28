@extends('layout')

@section('content')
    @if (empty($team))
        <p>No team found!</p>
    @else
        <h1> Edit {{ $team->name }}</h1>
        <form method="post" action="/teams/{{ $team->id }}">
            @csrf
            <div class="form-group">
                <label for="">Id</label>
                <input type="text" name="id" value="{{ $team->id }}" class="form-control" readonly>
                <label for="">Name</label>
                <input type="text" name="name" value="{{ $team->name }}" class="form-control">
                <label for="">Coach</label>
                <input type="text" name="coach" value="{{ $team->coach }}" class="form-control">
                <label for="">Category</label>
                <input type="text" name="category" value="{{ $team->category }}" class="form-control">
                <label for="">Budget</label>
                <input type="number" step="0.01" name="budget" value="{{ $team->budget }}" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-secondary">Update Team</button>
            </div>
        </form>
        <div>
            <form method="get" action="/teams/{{ $team->id }}">
                <button type="submit" class="btn btn-secondary">back</button>
            </form>
        </div>
    @endif
@endsection
