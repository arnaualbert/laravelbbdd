{{-- this view add new team --}}
@extends('layout')
@section('content')
    <h1>ADD NEW TEAM</h1>
    <form method="post" action="/teamsadd/new">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control">
            <label for="">Coach</label>
            <input type="text" name="coach" class="form-control">
            <label for="">Category</label>
            <input type="text" name="category" class="form-control">
            <label for="">Budget</label>
            <input type="number" name="budget" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-secondary">Create Team</button>
        </div>
    </form>
@endsection
