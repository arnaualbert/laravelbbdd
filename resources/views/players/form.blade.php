{{-- is the view to add a new a player --}}
@extends('layout')
@section('content')
    <h1>ADD NEW PLAYER</h1>
    <form method="post" action="/playersadd/new">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control">
            <label for="">Surname</label>
            <input type="text" name="surname" class="form-control">
            <label for="">Year of birth</label>
            <input type="number" name="yearofbirth" class="form-control">
            <label for="">Salary</label>
            <input type="number" name="salary" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-secondary">Create Player</button>
        </div>
    </form>
@endsection
