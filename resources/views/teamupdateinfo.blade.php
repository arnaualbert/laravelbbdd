@extends('layout')
@section('title')
THINGS ARE HAPPENING!!!!
@endsection
@section('content')
<h1 class="text-danger" >THINGS ARE HAPPENING!!!!</h1>
<p>Gerard Romero inform that:</p>
<p>{{$oldteam->name}} have changed the name to  {{$teamupdate->name}}</p>
<p>{{$oldteam->name}} have changed the coach to  {{$teamupdate->coach}}</p>
<p>{{$oldteam->name}} have changed the category to  {{$teamupdate->category}}</p>
<p>{{$oldteam->name}} have changed the budget to  {{$teamupdate->budget}}</p>
<a href="/teams">Go to teams manage</a>
<a href="/players">Go to players manage</a>
@endsection
