@extends('layout')
@section('title')
HERE WE GO
@endsection
@section('content')
<h1 class="text-danger" >HERE WE GO</h1>
<p>Fabrizio Romano inform that {{$playerupdate->name}} have reached and agreement with {{$teamjoined->name}} to join the club</p>
<p>The player was born in {{$playerupdate->yearofbirth}}</p>
<p>The salary will be: {{$playerupdate->salary}}€</p>
<a href="/teams">Go to teams manage</a>
<a href="/players">Go to players manage</a>
@endsection
