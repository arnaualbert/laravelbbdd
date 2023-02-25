@extends('layout')
@section('title')
THINGS ARE HAPPENING!!
@endsection
@section('content')
<h1 class="text-danger" >THINGS ARE HAPPENING!!</h1>
<p>Gerard Romero inform that {{$playerupdate->name}} have reached and agreement with {{$teamjoined->name}} to end the contract</p>
<p>The player was born in {{$playerupdate->yearofbirth}}</p>
<p>The salary will be: {{$playerupdate->salary}}€</p>
<a href="/teams">Go to teams manage</a>
<a href="/players">Go to players manage</a>
@endsection
