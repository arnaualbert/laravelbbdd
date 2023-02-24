@extends('layout')

@section('content')
@if (empty($team))
<p>No team found!</p>
@else
<h1>{{$team->name}}</h1>
<p>Coach: {{$team->coach}}</p>
<p>Category: {{$team->category}}</p>
<p>Budget: {{$team->budget}}</p>
<form >

</form>
@endif

@endsection
