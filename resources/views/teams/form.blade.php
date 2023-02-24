@extends('layout')

@section('content')
    @if (empty($team))
        <p>No team found!</p>
    @else
        <h1> Edit {{ $team->name }}</h1>
        <form method="post" action="/teams/{{ $team->id }}">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value="{{ $team->name }}" class="form-control">
                <label for="">Coach</label>
                <input type="text" name="coach" value="{{ $team->coach }}" class="form-control">
                <label for="">Category</label>
                <input type="text" name="category" value="{{ $team->category }}" class="form-control">
                <label for="">Budget</label>
                <input type="text" name="budget" value="{{ $team->budget }}" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-secondary">Update Team</button>
            </div>
        </form>
    @endif
@endsection
