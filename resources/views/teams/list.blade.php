@extends('layout')

@section('content')
    @if (empty($teams))
        <p>No teams in the league</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Coach</th>
                    <th scope="col">Category</th>
                    <th scope="col">Budget</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $team)
                    <tr>
                        <td>{{ $team->id }}</td>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->coach }}</td>
                        <td>{{ $team->category }}</td>
                        <td>{{ $team->budget }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

@endsection
